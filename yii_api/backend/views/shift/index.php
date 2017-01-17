<?php

use yii\helpers\Html;
use kartik\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\ShiftSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('backend', 'Shifts');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="shift-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('backend', 'Create Shift'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'filterUrl' => \yii\helpers\Url::to(['shift/index']),
        'pjax' => true,
        'pjaxSettings'=>[
            'neverTimeout'=>true,
            //'clientOptions' => ['method' => 'POST'],
            'options' => [
                'enablePushState' => false,
            ],
        ],
        'responsive' => true,
        'responsiveWrap' => true,
        'resizableColumns'=> true,
        'persistResize' => true,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn','visible' => false],

            'id',
            'title',
            [
                'attribute' => 'supervisor',
                'value' => function ($model){
                    return \common\models\User::find()->select('username')->where(['id' => $model->supervisor])->one()->username;
                },
            ],
            [
                'attribute' => 'assigned_to',
                'value' => function ($model){
                    return \common\models\User::find()->select('username')->where(['id' => $model->assigned_to])->one()->username;
                },
            ],
            'date',
            [
                'attribute'=> 'status',
                //'vAlign'=>'middle',
                //'width'=>'180px',
                'value' => function($model){
                    switch($model->status){
                        case 0:
                            $a = "Invitation";
                            break;
                        case 1:
                            $a = "Pending";
                            break;
                        case 2:
                            $a = "Accepted";
                    }
                    return $a;
                },
                //'format'=>'raw'
            ],
            ['class' => 'yii\grid\ActionColumn'],
            //['class' => 'yii\grid\CheckboxColumn'],
        ],
    ]); ?>
</div>
