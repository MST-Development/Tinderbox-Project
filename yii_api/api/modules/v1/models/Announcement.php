<?php
namespace api\modules\v1\models;
use \yii\db\ActiveRecord;
/**
 * Announcement Model
 */
class Announcement extends ActiveRecord
{
	/**
	 * @inheritdoc
	 */
	public static function tableName()
	{
		return 'announcement';
	}

    /**
     * Define rules for validation
     */
    public function rules()
    {
        return [
            [['id', 'title', 'content', 'date'], 'required']
        ];
    }
}
