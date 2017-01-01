<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\Information */

$this->title = Yii::t('frontend', 'Create Information');
$this->params['breadcrumbs'][] = ['label' => Yii::t('frontend', 'Informations'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="information-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
