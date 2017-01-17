<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $form yii\widgets\ActiveForm */
/* @var $model \common\models\LoginForm */

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="site-login">
    <?= Html::img(Yii::$app->params['siteLogo'], ['alt'=>'logo', 'class'=>'site-logo']);?>
    <h1><?= Html::encode($this->title) ?></h1>

    <p>Please fill out the following fields to login:</p>

    <div class="row">
        <div class="site-login-form col-lg-6 col-lg-offset-3">
            <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>
                <?= $form->field($model, 'username')->textInput()->input('username',['placeholder' => 'Username'])->label(false) ?>
                <?= $form->field($model, 'password')->passwordInput()->input('password',['placeholder' => 'Password'])->label(false) ?>
                <?= $form->field($model, 'rememberMe')->checkbox() ?>
                <div class="form-group">
                    <?= Html::submitButton('Login <span class="fa fa-arrow-circle-right"></span>', ['class' => 'btn btn-primary transparent-button', 'name' => 'login-button']) ?>
                </div>
            <div style="color:#999;margin:1em 0">
                If you forgot your password you can <?= Html::a('reset it', ['site/request-password-reset']) ?>.
            </div>
            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
