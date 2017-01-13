<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\widgets\Alert;

use frontend\assets\SiteAsset;
use frontend\assets\AnnouncementAsset;
use frontend\assets\FaqAsset;
use frontend\assets\InformationAsset;
use frontend\assets\MessageAsset;
use frontend\assets\ShiftAsset;

/* @var $this \yii\web\View */
/* @var $content string */

switch ($this->context->id) {
    case "site":
        SiteAsset::register($this);
        break;
    case "announcement":
        SiteAsset::register($this);
        //AnnouncementAsset::register($this);
        break;
    case "faq":
        SiteAsset::register($this);
        //FaqAsset::register($this);
        break;
    case "information":
        SiteAsset::register($this);
        //InformationAsset::register($this);
        break;
    case "message":
        SiteAsset::register($this);
        //MessageAsset::register($this);
        break;
    case "shift":
        SiteAsset::register($this);
        //ShiftAsset::register($this);
        break;
}

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="page-<?= $this->context->id ?>-<?= $this->context->action->id ?>">
    <?php $this->beginBody() ?>
    <div class="wrap">
        <?php
            NavBar::begin([
                'brandLabel' => Html::img(Yii::$app->params['siteLogoWhite'], ['alt'=>Yii::$app->name, 'class' => 'header-logo']) . '<span>' . Yii::$app->params['siteName'] . '</span>',
                'brandUrl' => Yii::$app->homeUrl,
                'options' => [
                    'class' => 'navbar-inverse navbar-fixed-top header',
                ],
            ]);
            $menuItems = [
                ['label' => 'Home', 'url' => ['/site/index']],
                //['label' => 'About', 'url' => ['/site/about']],
                //['label' => 'Contact', 'url' => ['/site/contact']],
            ];
            if(Yii::$app->user->can("admin")){
                $menuItems[] = ['label' => 'Administration', 'url' => "./../../backend/web/"];
            }
            if (Yii::$app->user->isGuest) {
                $menuItems[] = ['label' => 'Signup', 'url' => ['/site/signup']];
                $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
            } else {
                $menuItems[] = [
                    'label' => 'Logout (' . Yii::$app->user->identity->username . ')',
                    'url' => ['/site/logout'],
                    'linkOptions' => ['data-method' => 'post']
                ];
            }
            echo Nav::widget([
                'options' => ['class' => 'navbar-nav navbar-right'],
                'items' => $menuItems,
            ]);
            NavBar::end();
        ?>

        <div class="container">
        <!--<?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>-->
        <?= Alert::widget() ?>
        <?= $content ?>
        </div>
    </div>

    <footer class="footer">
        <div class="container">
        <p class="pull-left">&copy; <?= Yii::$app->params['siteName'] ?> <?= date('Y') ?></p>
        <p class="pull-right"><?= Yii::powered() ?></p>
        </div>
    </footer>

    <?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
