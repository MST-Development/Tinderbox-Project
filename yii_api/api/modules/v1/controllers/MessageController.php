<?php
/**
 * Created by PhpStorm.
 * User: zongy
 * Date: 28-11-2016
 * Time: 12:45
 */

namespace api\modules\v1\controllers;
use yii\rest\ActiveController;

class MessageController extends ActiveController
{
    public $modelClass = 'api\modules\v1\models\Message';
}