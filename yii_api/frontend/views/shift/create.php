<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\Shift */

$this->title = Yii::t('frontend', 'Create Shift');
$this->params['breadcrumbs'][] = ['label' => Yii::t('frontend', 'Shifts'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="shift-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
