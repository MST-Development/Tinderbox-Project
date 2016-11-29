<?php
namespace api\modules\auth;
use yii\filters\auth\HttpBasicAuth;

class AuthModule extends \yii\base\Module
{
    public $controllerNamespace = 'api\modules\auth\controllers';

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
