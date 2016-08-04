<?php
namespace frontend\controllers;

use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;

/*Site controller*/
class SiteController extends Controller
{
    public $enableCsrfValidation = false;
    //public $layout = 'buble_main'; - свой layout
    
    /*@inheritdoc*/
    public function behaviors()
    {
        if(Yii::$app->request->post('digest')!='')
        {
            SiteController::simora_login();
        } 
        
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['signup'],
                        'allow' => true,
                        'roles' => ['?'],//все пользователи
                    ],
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],//авторизированные
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];           
    }
    
    //Прием данных от симоры
    public function simora_login()
    {        
        var_dump(Yii::$app->request->post());
    }

    /*@inheritdoc*/
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    //Главная
    public function actionIndex()
    {        
        return $this->render('index');
    }        
    
    //Как это работает
    public function actionKakEtoRabotaet()
    {
        $this->layout = '//work';//использование layout для отдельных view        
        return $this->render('kak-eto-rabotaet');
    }
    
    //Как подключиться
    public function actionKakPodklyuchitsya()
    {
        $this->layout = '//work';//использование layout для отдельных view        
        return $this->render('kak-podklyuchitsya');
    }
    
    //Сколько стоит
    public function actionSkolkoStoit($lang = NULL)
    {
        $this->layout = '//work';//использование layout для отдельных view        
        return $this->render('skolko-stoit', array(
            'lang' => 'ru'
        ));
    }
    
    //Отзыв
    public function actionOtzyv()
    {
        $this->layout = '//work';//использование layout для отдельных view        
        return $this->render('otzyv');
    }

    //страница логина
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
            //return $this->redirect('/site/about'); - редирект на страницу после авторизации
        } else {
            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }

    //Выход
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    //Обратная связь
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail(Yii::$app->params['adminEmail'])) {
                Yii::$app->session->setFlash('success', 'Thank you for contacting us. We will respond to you as soon as possible.');
            } else {
                Yii::$app->session->setFlash('error', 'There was an error sending email.');
            }

            return $this->refresh();
        } else {
            return $this->render('contact', [
                'model' => $model,
            ]);
        }
    }

    //Регистрация
    public function actionSignup()
    {
        $model = new SignupForm();
        if ($model->load(Yii::$app->request->post())) {
            if ($user = $model->signup()) {
                if (Yii::$app->getUser()->login($user)) {
                    return $this->goHome();
                }
            }
        }

        return $this->render('signup', [
            'model' => $model,
        ]);
    }

    //Восстановление пароля
    public function actionRequestPasswordReset()
    {
        $model = new PasswordResetRequestForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail()) {
                Yii::$app->session->setFlash('success', 'Check your email for further instructions.');

                return $this->goHome();
            } else {
                Yii::$app->session->setFlash('error', 'Sorry, we are unable to reset password for email provided.');
            }
        }

        return $this->render('requestPasswordResetToken', [
            'model' => $model,
        ]);
    }

    //Сброс пароля
    public function actionResetPassword($token)
    {
        try {
            $model = new ResetPasswordForm($token);
        } catch (InvalidParamException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }

        if ($model->load(Yii::$app->request->post()) && $model->validate() && $model->resetPassword()) {
            Yii::$app->session->setFlash('success', 'New password was saved.');

            return $this->goHome();
        }

        return $this->render('resetPassword', [
            'model' => $model,
        ]);
    }
}
