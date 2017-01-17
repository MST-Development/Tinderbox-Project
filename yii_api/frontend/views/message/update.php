<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Message */

$this->title = Yii::t('frontend', 'Update {modelClass}: ', [
    'modelClass' => 'Message',
]) . $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('frontend', 'Messages'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('frontend', 'Update');
?>
<div class="message-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
