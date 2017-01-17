<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%shift}}".
 *
 * @property integer $id
 * @property string $title
 * @property string $supervisor
 * @property string $date
 * @property integer $status
 */
class Shift extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%shift}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'supervisor', 'date', 'status'], 'required'],
            [['date'], 'safe'],
            [['status', 'supervisor', 'assigned_to'], 'integer'],
            [['title'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('backend', 'ID'),
            'title' => Yii::t('backend', 'Title'),
            'supervisor' => Yii::t('backend', 'Supervisor'),
            'date' => Yii::t('backend', 'Date'),
            'status' => Yii::t('backend', 'Status'),
        ];
    }
}
