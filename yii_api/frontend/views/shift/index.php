<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel frontend\models\ShiftSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('frontend', 'Shifts');
$this->params['breadcrumbs'][] = $this->title;
$dataProvider = $dataProvider->getModels();
?>
<div class="shift-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <div class="container container-cent">
        <?php foreach($dataProvider as $item){ ?>

            <!--<h2>Simple Collapsible</h2>
            <p>Click on the button to toggle between showing and hiding content.</p>-->
            <button type="button" class="btn btn-info button-iterated" data-toggle="collapse" data-target="#demo-<?= $item->id ?>">
                <p class="btn-info-date"><?= $item->date ?></p>
                <p class="btn-info-supervisor"><?= \common\models\User::find()->select('username')->where(['id'=>$item->supervisor])->one()->username ?><br><?= $item->location ?></p>
            </button>
            <div id="demo-<?= $item->id ?>" class="collapse div-itterated">
                <?php
                Switch($item->status){
                    case 0:
                        echo '<div class="btn-i-accept">' . Html::a('Accept', ['accept', 'id' => $item->id]) . '</div>';
                        echo '<div class="btn-i-decline">' . Html::a('Decline', ['decline', 'id' => $item->id]) . '</div>';
                        break;
                    case 1:
                        echo '<div class="btn-i-map">' . Html::a('Show on map', ['#']) . '</div>';
                        echo '<div class="btn-i-decline">' . Html::a('Decline', ['decline', 'id' => $item->id]) . '</div>';
                        break;
                    case 2:
                        echo '<div class="btn-i-map">' . Html::a('Show on map', ['#']) . '</div>';
                        echo '<div class="btn-i-trade">' . Html::a('Trade', ['#']) . '</div>';
                        break;
                }
                ?>
            </div>

        <?php } ?>
    </div>

