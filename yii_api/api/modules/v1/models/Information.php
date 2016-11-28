<?php
namespace api\modules\v1\models;
use \yii\db\ActiveRecord;
/**
 * Information Model
 */
class Information extends ActiveRecord
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
