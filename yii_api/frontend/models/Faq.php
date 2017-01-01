<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "{{%faq}}".
 *
 * @property integer $id
 * @property string $title
 * @property string $content
 */
class Faq extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%faq}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'content'], 'required'],
            [['title'], 'string', 'max' => 50],
            [['content'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('frontend', 'ID'),
            'title' => Yii::t('frontend', 'Title'),
            'content' => Yii::t('frontend', 'Content'),
        ];
    }
}
