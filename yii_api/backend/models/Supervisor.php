<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%supervisor}}".
 *
 * @property integer $id
 * @property string $name
 * @property string $title
 * @property string $team
 * @property integer $phone
 * @property string $email
 * @property string $portrait
 */
class Supervisor extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%supervisor}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'title', 'team', 'phone', 'email', 'portrait'], 'required'],
            [['phone'], 'integer'],
            [['name', 'title'], 'string', 'max' => 50],
            [['team'], 'string', 'max' => 100],
            [['email'], 'string', 'max' => 155],
            [['portrait'], 'string', 'max' => 255],
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
            'title' => Yii::t('backend', 'Title'),
            'team' => Yii::t('backend', 'Team'),
            'phone' => Yii::t('backend', 'Phone'),
            'email' => Yii::t('backend', 'Email'),
            'portrait' => Yii::t('backend', 'Portrait'),
        ];
    }
}
