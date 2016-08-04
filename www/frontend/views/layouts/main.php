<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
    <title><?= Html::encode($this->title) ?></title>    
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <div class="container">
        <div class="header">            
            <?= Html::img('@web/images/main/crm-logo.gif', ['alt' => 'Веб-Грамотей','class' => 'logo']) ?>
            <p>Веб-Грамотей &mdash; тренажёр орфографии русского языка</p>
        </div>
    </div>    

    <div class="container">                
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p>&copy; <a href="http://cerm.ru">АНО «ЦРМ»</a></p>
        <p>телефоны: <a href="tel:+79826502661">+7 (982) 650-26-61</a>, <a href="tel:+73432194148">+7 (343)219-41-48</a></p>
        <p>email: <a href="mailto:gramotei@cerm.ru">gramotei@cerm.ru</a></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
