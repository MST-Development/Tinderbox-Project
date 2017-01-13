<?php
/* @var $this yii\web\View */

use yii\helpers\Url;

$this->title = 'Tinderbox V-Admin';

//echo Yii::$app->getSecurity()->generatePasswordHash('test');
?>
<div class="site-index">

    <div class="banner">
        <div id="app_logo"></div>
        <span>AdminBox</span>
        <span>Volunteer</span>
    </div><!-- /header -->

    <div id="page_menu_content">
        <a href="<?= Url::toRoute('shift/index') ?>">
            <p>
                <span class="fa fa-3x fa-calendar"></span>
                <span>Schedule</span>
            </p>
        </a>
        <a href="#">
            <p class="special">
                <span class="fa fa-3x fa-clock-o"></span>
                <span class="info">Next shift: 4h 38m</span>
                <span class="info-separator"> | </span>
                <span class="info">Time to ticket: 16h</span>
            </p>
        </a>
        <a href="#">

            <p>
                <span class="fa fa-3x fa-map-marker"></span>
                <span>Map</span>
            </p>
        </a>
        <a href="<?= Url::toRoute('message/index') ?>">
            <p>
                <span class="fa fa-3x fa-phone"></span>
                <span>Contact</span>
            </p>
        </a>
        <a href="<?= Url::toRoute('announcement/index') ?>">
            <p>
                <span class="fa fa-3x fa-bullhorn"></span>
                <span>Announcements</span>
            </p>
        </a>
        <a href="#">
            <p>
                <span class="fa fa-3x fa-exchange"></span>
                <span>Trademarket</span>
            </p>
        </a>
        <a href="<?= Url::toRoute('information/index') ?>">
            <p>
                <span class="fa fa-3x fa-info-circle"></span>
                <span>INFO</span>
            </p>
        </a>
        <a href="<?= Url::toRoute('faq/index') ?>">
            <p>
                <span class="fa fa-3x fa-question-circle"></span>
                <span>FAQ</span>
            </p>
        </a>
    </div><!-- /content -->

</div>
