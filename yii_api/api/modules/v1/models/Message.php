<?php
/**
 * Created by PhpStorm.
 * User: zongy
 * Date: 28-11-2016
 * Time: 12:45
 */

namespace api\modules\v1\models;
use yii\db\ActiveRecord;

class Message extends ActiveRecord
{
    public static function tableName()
    {
        return '{{%message}}';;
    }
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['name', 'date', 'content', 'sender', 'recipient'], 'required']
        ];
    }
}