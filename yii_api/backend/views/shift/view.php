<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Shift */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => Yii::t('backend', 'Shifts'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="shift-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('backend', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('backend', 'Delete'), ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('backend', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'title',
            [
                'attribute'=>'supervisor',
                'value'=> \common\models\User::find()->select('username')->where(['id' => $model->supervisor])->one()->username,
            ],
            'date',
            'status',
            /*[
                'attribute'=>'status',
                'format' => "raw",
                'value'=> function ($model){
                    switch($model->status){
                        case 0:
                            return "Invitation";
                            break;
                        case 1:
                            return "Pending";
                            break;
                        case 2:
                            return "Accepted";
                            break;
                    }
                },
            ],*/
            [
                'attribute'=>'assigned_to',
                'value' => \common\models\User::find()->select('username')->where(['id' => $model->assigned_to])->one()->username,
            ],
        ],
    ]) ?>

</div>
