<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%announcement}}".
 *
 * @property integer $id
 * @property string $author
 * @property string $title
 * @property string $content
 * @property string $date
 */
class Announcement extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%announcement}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['author', 'title', 'content', 'date'], 'required'],
            [['date'], 'safe'],
            [['author', 'title'], 'string', 'max' => 50],
            [['content'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('backend', 'ID'),
            'author' => Yii::t('backend', 'Author'),
            'title' => Yii::t('backend', 'Title'),
            'content' => Yii::t('backend', 'Content'),
            'date' => Yii::t('backend', 'Date'),
        ];
    }
}