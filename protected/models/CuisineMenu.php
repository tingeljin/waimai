<?php

/**
 * This is the model class for table "wm_cuisine_menu".
 *
 * The followings are the available columns in table 'wm_cuisine_menu':
 * @property integer $cuisine_id
 * @property integer $cuisine_shop_id
 * @property integer $cuisine_type_id
 * @property string $cuisine_name
 * @property double $cuisine_price
 */
class CuisineMenu extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return CuisineMenu the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'wm_cuisine_menu';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('cuisine_shop_id, cuisine_type_id', 'numerical', 'integerOnly'=>true),
			array('cuisine_price', 'numerical'),
			array('cuisine_name', 'length', 'max'=>50),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('cuisine_id, cuisine_shop_id, cuisine_type_id, cuisine_name, cuisine_price', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'cuisine_id' => 'Cuisine',
			'cuisine_shop_id' => 'Cuisine Shop',
			'cuisine_type_id' => 'Cuisine Type',
			'cuisine_name' => 'Cuisine Name',
			'cuisine_price' => 'Cuisine Price',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('cuisine_id',$this->cuisine_id);
		$criteria->compare('cuisine_shop_id',$this->cuisine_shop_id);
		$criteria->compare('cuisine_type_id',$this->cuisine_type_id);
		$criteria->compare('cuisine_name',$this->cuisine_name,true);
		$criteria->compare('cuisine_price',$this->cuisine_price);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}