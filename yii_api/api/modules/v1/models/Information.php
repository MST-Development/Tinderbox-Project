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
		return 'information';
	}

    /**
     * Define rules for validation
     */
    public function rules()
    {
        return [
            [['title', 'content'], 'required']
        ];
    }
}
