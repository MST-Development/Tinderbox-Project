<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%message}}".
 *
 * @property integer $id
 * @property string $name
 * @property string $date
 * @property string $content
 * @property integer $sender
 * @property integer $recipient
 */
class Message extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%message}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'date', 'content', 'sender', 'recipient'], 'required'],
            [['date'], 'safe'],
            [['content'], 'string'],
            [['sender', 'recipient'], 'integer'],
            [['name'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('backend', 'ID'),
            'name' => Yii::t('backend', 'Name'),
            'date' => Yii::t('backend', 'Date'),
            'content' => Yii::t('backend', 'Content'),
            'sender' => Yii::t('backend', 'Sender'),
            'recipient' => Yii::t('backend', 'Recipient'),
        ];
    }
}
