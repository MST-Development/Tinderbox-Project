<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Announcement */

$this->title = Yii::t('frontend', 'Update {modelClass}: ', [
    'modelClass' => 'Announcement',
]) . $model->title;
$this->params['breadcrumbs'][] = ['label' => Yii::t('frontend', 'Announcements'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('frontend', 'Update');
?>
<div class="announcement-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
