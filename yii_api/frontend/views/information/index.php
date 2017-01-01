<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel frontend\models\InformationSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('frontend', 'Informations');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="information-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
       <!-- <? echo Html::a(Yii::t('frontend', 'Create Information'), ['create'], ['class' => 'btn btn-success']) ?>-->
    </p>
    <div class="container container-cent">
<?php foreach($dataProvider as $item){ ?>

        <!--<h2>Simple Collapsible</h2>
        <p>Click on the button to toggle between showing and hiding content.</p>-->
        <button type="button" class="btn btn-info button-iterated" data-toggle="collapse" data-target="#demo-<?= $item->id ?>"><?= $item->id . '. ' . $item->title ?></button>
        <div id="demo-<?= $item->id ?>" class="collapse div-itterated">
            <?= $item->content ?>
        </div>

<?php } ?>
</div>
    <?php /* Pjax::begin(); ?>    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'title',
            'content',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); */ ?>
<?php //Pjax::end(); ?>
</div>
