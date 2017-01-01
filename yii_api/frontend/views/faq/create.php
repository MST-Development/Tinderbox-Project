<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\Faq */

$this->title = Yii::t('frontend', 'Create Faq');
$this->params['breadcrumbs'][] = ['label' => Yii::t('frontend', 'Faqs'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="faq-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
