<?php

namespace common\models;

/**
 * This is the model class for table "tbl_category".
 *
 * @property string $id
 * @property string $root
 * @property string $lft
 * @property string $rgt
 * @property integer $level
 */
class Category extends \yii\db\ActiveRecord
{
	/**
	 * @inheritdoc
	 */
	public static function tableName()
	{
		return 'tbl_category';
	}

	/**
	 * @inheritdoc
	 */
	public function rules()
	{
		return [
			[['root', 'lft', 'rgt', 'level'], 'integer'],
			[['name', 'lft', 'rgt', 'level'], 'required'],
            [['desc'], 'string', 'max' => 255 ],
		];
	}

	/**
	 * @inheritdoc
	 */
	public function attributeLabels()
	{
		return [
			'id' => 'ID',
            'name' => '栏目名称',
            'desc' => '备注信息',
			'root' => 'Root',
			'lft' => 'Lft',
			'rgt' => 'Rgt',
			'level' => 'Level',
		];
	}
}
