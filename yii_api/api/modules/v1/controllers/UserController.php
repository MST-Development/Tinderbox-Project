<?php

namespace api\modules\v1\controllers;

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
        unset($actions['delete'], $actions['create'], $actions['index'], /*$actions['update'],*/ $actions['options']);

        return $actions;
    }

    public function checkAccess($action, $model = null, $params = [])
    {
        // check if the user can access $action and $model
        // throw ForbiddenHttpException if access should be denied
        if (($action === 'view') OR ($action === 'update')) {
            if ($model->id !== \Yii::$app->user->id)
                throw new \yii\web\ForbiddenHttpException(sprintf('You can only your own profile.', $action));
        }
    }
}


