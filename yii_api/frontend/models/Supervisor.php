<?php

namespace frontend\models;

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
            'id' => Yii::t('frontend', 'ID'),
            'name' => Yii::t('frontend', 'Name'),
            'title' => Yii::t('frontend', 'Title'),
            'team' => Yii::t('frontend', 'Team'),
            'phone' => Yii::t('frontend', 'Phone'),
            'email' => Yii::t('frontend', 'Email'),
            'portrait' => Yii::t('frontend', 'Portrait'),
        ];
    }
}
