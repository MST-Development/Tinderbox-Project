<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\widgets\DateTimePicker;

/* @var $this yii\web\View */
/* @var $model app\models\Announcement */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="announcement-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'author')->hiddenInput()->label(false) ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'content')->textArea(['rows' => '2', 'maxlength' => true]) ?>

    <?= $form->field($model, 'date')->widget(DateTimePicker::classname(), [
                                    'options' => ['placeholder' => 'Announcement time'],
                                    'pluginOptions' => [
                                    'autoclose' => true
                                ]
        ]);
    ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('backend', 'Create') : Yii::t('backend', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
