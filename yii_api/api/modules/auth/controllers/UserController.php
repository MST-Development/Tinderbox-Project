<?php

namespace api\modules\auth\controllers;

use yii\data\ActiveDataProvider;
use yii\rest\ActiveController;

/**
 * Announcement Controller API
 */
class UserController extends ActiveController
{
    public $modelClass = 'common\models\User';

    public function actions()
    {
        $actions = parent::actions();

        // disable the "delete" and "create" actions
        unset($actions['delete'], $actions['create'], /*$actions['index'],*/ /*$actions['update'],*/ $actions['options']);

        // customize the data provider preparation with the "prepareDataProvider()" method
        $actions['index']['prepareDataProvider'] = [$this, 'prepareDataProvider'];

        return $actions;
    }

    public function checkAccess($action, $model = null, $params = [])
    {
        // check if the user can access $action and $model
        // throw ForbiddenHttpException if access should be denied
        if(($action === 'index') AND (\Yii::$app->user->isGuest)){
            throw new \yii\web\ForbiddenHttpException(sprintf('You must login. -> ', $action));
        }elseif(($action === 'view') OR ($action === 'update')) {
            if ($model->id !== \Yii::$app->user->id)
                throw new \yii\web\ForbiddenHttpException(sprintf('You can only your own profile. -> ', $action));
        }
    }

    public function prepareDataProvider(){
    /* @var $modelClass \yii\db\BaseActiveRecord */
        $modelClass = $this->modelClass;

        return new ActiveDataProvider([
            'query' => $modelClass::find()->where(['id' => \Yii::$app->user->id]),
        ]);
    }
}


