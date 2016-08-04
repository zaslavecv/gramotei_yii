<?php

/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
$this->title = 'Веб-Грамотей';
?>
<div class="site-index">
    
    <div class="body-content">                
        <p class="reg_block">
            <a href="http://login.cerm.ru/">вход</a>
            <span>|</span>
            <a href="http://login.cerm.ru/_user/user_app.php?mod=userreg&ref=http://<?=$_SERVER['HTTP_HOST']?>/">регистрация</a>
        </p>
        <div class="container-fluid">
            <p style="font-size: 1.2em;">Онлайн-тренажёр <b>«Веб-Грамотей»</b> &mdash; современный помощник учителя русского языка.</p>
            <div class="row">
                <div class="col-lg-8 col-md-6 col-sm-6 col-xs-6">                    
                    <p style="font-size: 1.2em;">Развивать навыки орфографии с онлайн-тренажёром «Веб-Грамотей» удобно и просто!</p>
                    <ol>
                        <li>Учитель выбирает упражнение соответствующее изучаемому материалу и выдаёт его ученикам в качестве домашней работы.</li>
                        <li>Ученики выполняют упражнение на своих домашних компьютерах и сразу же делают работу над ошибками.</li>
                        <li>Учитель получает итоги работы класса в единой таблице результатов.</li>
                    </ol>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6"><iframe style="float: right;" width="100%" src="//www.youtube.com/embed/E87gJ_hqchE" frameborder="0" allowfullscreen></iframe></div>                
            </div>
            <hr style="border-color: #cec; margin: 15px 0;">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                    <p style="font-size: 1.2em;">Хотите повысить уровень грамотности своих учеников?<br> Начните работу с «Веб-Грамотей»!</p>
                    <ul>
			<li><a href="site/kak-eto-rabotaet">Как это работает</a></li>
			<li><a href="/site/kak-podklyuchitsya">Как подключиться</a></li>
			<li><a href="/site/skolko-stoit">Сколько стоит</a></li>
			<li><a href="/site/otzyv">Отзывы пользователей</a></li>
                    </ul>

                    <p style="font-size: 1.2em;">Cпециальные предложения</p>
                    <ul>
                        <li><a href="offer2">Для малокомплектных школ</a><br>Два класса по цене одного</li>
			<li><a href="offer3">Участникам конкурса «Грамотей-марафон» 2015</a><br>3 месяца к подписке в подарок!</li>
                    </ul>

                    <hr style="border-color: #cec; margin: 15px 0;">

                    <p  style="font-size: 1.2em;"><b>«Веб-Грамотей»</b> - это...</p>
                    <ul>
			<li><b>больше</b> современных заданий</li>
			<li><b>меньше</b> времени на проверку тетрадей</li>
			<li><b>выше</b> уровень грамотности</li>
			<li><b>интереснее</b> процесс обучения</li>			
                    </ul>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
			<div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="orfoEverest">
                                <h4 class="panel-title">
                                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse1" aria-expanded="true" aria-controls="collapse1">
                                        <b>Всероссийский турнир «Орфо-Эверест»</b><br>
                                        <small>для учащихся 5-11 классов; с 15 по 30 апреля 2016 года</small>
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse1" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="orfoEverest">
                                <div class="panel-body bg-warning">
                                    «Орфо-Эверест» - это игровой онлайн-турнир по орфографии для школьников 5-11 классов.<br>
                                    Любой учащихйся (любой класс), зарегистрированный в тренажёре «Веб-Грамотей»,
                                    может принять участие в турнире.<br>
                                    Подписка для класса не требуется. Участие бесплатное.
                                    <hr>
                                    <form action="/everest" class="text-center">
                                            <button type="submit" class="btn btn-primary" formaction="/everest"><b>Подробнее</b></button>
                                    </form>
                                </div>
                            </div>
			</div>
			<div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="orfo9">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                        <b>Программа «ОРФО-9»</b><br>
                                        <small>повышение орфографической грамотности учащихся <nobr>9-х</nobr> классов</small>
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="orfo9">
                                <div class="panel-body bg-warning">
                                    <h4>Цель программы</h4>
                                    <ul>
                                        <li>Повысить грамотность учащихся 9-х классов в части орфографии.</li>
                                        <li>Улучшить результаты ОГЭ по русскому языку учащихся <nobr>9-х</nobr> классов.</li>
                                        <li>Предоставить учителям русского языка современный эффективный инструмент обучения правописанию.</li>
                                    </ul>
                                    <hr>
                                    <form action="http://orfo9.cerm.ru" class="text-center">
                                        <button type="submit" class="btn btn-primary" formaction="http://orfo9.cerm.ru"><b>Перейти на сайт программы</b></button>
                                    </form>
                                </div>
                            </div>
			</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
