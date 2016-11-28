<?php
/**
 * Created by PhpStorm.
 * User: zongy
 * Date: 28-11-2016
 * Time: 11:08
 */

namespace api\modules\v1\controllers;
use yii\rest\ActiveController;

class SupervisorController extends ActiveController
{
    public $modelClass = 'api\modules\v1\models\Supervisor';
}