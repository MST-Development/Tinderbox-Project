<?php
namespace api\modules\v1\models;
use \yii\db\ActiveRecord;
/**
 * shift Model
 */
class shift extends ActiveRecord
{
	/**
	 * @inheritdoc
	 */
	public static function tableName()
	{
		return 'shift';
	}

    /**
     * Define rules for validation
     */
    public function rules()
    {
        return [
            [['id', 'title', 'supervisor', 'date', 'status'], 'required']
        ];
    }
}
