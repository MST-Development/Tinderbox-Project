<?php
namespace api\modules\v1\models;
use \yii\db\ActiveRecord;
/**
 * FAQ Model
 */
class Faq extends ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%faq}}';;
    }

    /**
     * Define rules for validation
     */
    public function rules()
    {
        return [
            [['id', 'title', 'content'], 'required']
        ];
    }
}
