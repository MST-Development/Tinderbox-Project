<?php

use yii\helpers\Html;
//use yii\grid\GridView;
use kartik\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\AnnouncementSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('backend', 'Announcements');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="announcement-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('backend', 'Create Announcement'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<?= GridView::widget([
    'dataProvider' => $dataProvider,
    'filterModel' => $searchModel,
    'filterUrl' => \yii\helpers\Url::to(['announcement/index']),
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
        [
            'attribute'=> 'author',
            //'vAlign'=>'middle',
            //'width'=>'180px',
            'value' => function($model){
                $a = common\models\User::find()->select(['username'])->where(['id' => $model->author])->one();
                return $a->username;
            },
            //'format'=>'raw'
        ],
        'title',
        'content',
        'date',
        ['class' => 'yii\grid\ActionColumn'],
        //['class' => 'yii\grid\CheckboxColumn'],
    ],
]); ?>
</div>
