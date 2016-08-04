<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Сколько стоит';
//$this->params['breadcrumbs'][] = $this->title;
?>
<style>
    .price{padding: 0.5em;}
</style>
<?=$lang?>
<div class="site">   
    <p style="font-size: 1.2em; font-weight: bold">Подписка на тренажёр «Веб-Грамотей» </p>
    <table border="1">
        <tr>
            <th class="price" style="text-align: center; white-space: nowrap">Срок подписки</th>
            <th class="price" style="text-align: center" colspan="2">Стоимость за класс</th>
            <th class="price" style="vertical-align: top">Примечание</th>
        </tr>
	<tr style="text-align: center">
            <td class="price">12 месяцев</td>
            <td class="price">4 500 рублей</td>
            <td class="price">22 500 тенге </td>
            <td rowspan="4" class="price" style="text-align: left; vertical-align: top">
                <ul>
                    <li>Подписку можно оформить в любой день, без ограничений.</li>
                    <li>Подписка действует со дня оформления в течение срока подписки.</li>
                    <li>Заказать счёт-квитанцию и оформить подписку можно со страницы учителя в тренажёре.</li>
                    <li>Обратите внимание, некоторые банки могут взимать комиссию за проведение платежа.</li>
                </ul>
            </td>
        </tr>
        <tr style="text-align: center">
            <td class="price">9 месяцев</td>
            <td class="price">3 500 рублей</td>
            <td class="price">17 500 тенге</td>
        </tr>
        <tr style="text-align: center">
            <td class="price">6 месяцев</td>
            <td class="price">2 500 рублей</td>
            <td>12 500 тенге</td>
        </tr>
        <tr style="text-align: center">
            <td class="price">3 месяца</td>
            <td class="price">1 500 рублей</td>
            <td>7 500 тенге</td>
        </tr>
        <tr style="text-align: center">
            <td class="price">1 месяц</td>
            <td class="price">600 рублей</td>
            <td>3 000 тенге</td>
        </tr>	
    </table>
    <hr style="border-color: #cec; margin: 15px 0;">   
    
    <p style="font-size: 1.2em; font-weight: bold">Промо-период</p>
    <ul>
        <li>В течение 30 дней после регистрации учителя действует промо-период. Вы и ваши ученики можете работать в тренажёре без каких-либо ограничений бесплатно.</li>
        <li>По окончании промо-периода, для продолжения работы с тренажёром необходимо оформить подписку для каждого класса.</li>
    </ul>

    <p>Примечание:</p>
    <ul>
	<li>
            Мы предполагаем, что одного месяца работы с тренажёром достаточно, чтобы оценить, подходит ли он вам.
            Однако если вам не хватило времени, чтобы принять решение о дальнейшем использовании тренажёра, отправьте нам на
            <a href="mailto:gramotei@cerm.ru">gramotei@cerm.ru</a> заявку о продлении промо-периода.
            В заявке укажите ваш регион, школу, ФИО и причину продления промо-периода.
	</li>
    </ul>
</div>
