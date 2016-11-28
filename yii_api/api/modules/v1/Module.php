<?php
namespace api\modules\v1;
use yii\filters\auth\HttpBasicAuth;

class Module extends \yii\base\Module
{
    public $controllerNamespace = 'api\modules\v1\controllers';

    public function behaviors()
    {
        $behaviors = parent::behaviors();
        $behaviors['authenticator'] = [
            'class' => HttpBasicAuth::className(),
            'auth'  => 'common\models\User::getUserIdentity',
        ];
        return $behaviors;
    }

    public function init()
    {
        parent::init();
        \Yii::$app->user->enableSession = false;
    }
}
