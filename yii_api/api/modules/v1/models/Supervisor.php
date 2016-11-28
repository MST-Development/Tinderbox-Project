<?php
/**
 * Created by PhpStorm.
 * User: zongy
 * Date: 28-11-2016
 * Time: 11:08
 */

namespace api\modules\v1\models;
use yii\db\ActiveRecord;

class Supervisor extends ActiveRecord
{
    public static function tableName()
    {
        return '{{%supervisor}}';;
    }
    public function rules()
    {
        return [
            [['id', 'name', 'title', 'team', 'phone', 'email', 'portrait'], 'required']
        ];
    }
}