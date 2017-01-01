<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\Announcement */

$this->title = Yii::t('frontend', 'Create Announcement');
$this->params['breadcrumbs'][] = ['label' => Yii::t('frontend', 'Announcements'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="announcement-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
