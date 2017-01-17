<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Information */

$this->title = Yii::t('backend', 'Update {modelClass}: ', [
    'modelClass' => 'Information',
]) . $model->title;
$this->params['breadcrumbs'][] = ['label' => Yii::t('backend', 'Informations'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('backend', 'Update');
?>
<div class="information-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
