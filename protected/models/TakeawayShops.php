<?php

/**
 * This is the model class for table "wm_takeaway_shops".
 *
 * The followings are the available columns in table 'wm_takeaway_shops':
 * @property integer $shop_id
 * @property string $shop_name
 * @property string $shop_tel1
 * @property string $shop_tel2
 * @property string $shop_address
 * @property string $shop_opentime
 * @property string $shop_closetime
 * @property double $shop_transportationcosts
 * @property double $shop_deliveryfee
 * @property double $shop_averagecost
 * @property string $shop_remark
 */
class TakeawayShops extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return TakeawayShops the static model class
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
		return 'wm_takeaway_shops';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('shop_name, shop_tel1', 'required'),
			array('shop_transportationcosts, shop_deliveryfee, shop_averagecost', 'numerical'),
			array('shop_name', 'length', 'max'=>50),
			array('shop_tel1, shop_tel2', 'length', 'max'=>12),
			array('shop_address, shop_remark', 'length', 'max'=>100),
			array('shop_opentime, shop_closetime', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('shop_id, shop_name, shop_tel1, shop_tel2, shop_address, shop_opentime, shop_closetime, shop_transportationcosts, shop_deliveryfee, shop_averagecost, shop_remark', 'safe', 'on'=>'search'),
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
			'shop_id' => 'Shop',
			'shop_name' => 'Shop Name',
			'shop_tel1' => 'Shop Tel1',
			'shop_tel2' => 'Shop Tel2',
			'shop_address' => 'Shop Address',
			'shop_opentime' => 'Shop Opentime',
			'shop_closetime' => 'Shop Closetime',
			'shop_transportationcosts' => 'Shop Transportationcosts',
			'shop_deliveryfee' => 'Shop Deliveryfee',
			'shop_averagecost' => 'Shop Averagecost',
			'shop_remark' => 'Shop Remark',
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

		$criteria->compare('shop_id',$this->shop_id);
		$criteria->compare('shop_name',$this->shop_name,true);
		$criteria->compare('shop_tel1',$this->shop_tel1,true);
		$criteria->compare('shop_tel2',$this->shop_tel2,true);
		$criteria->compare('shop_address',$this->shop_address,true);
		$criteria->compare('shop_opentime',$this->shop_opentime,true);
		$criteria->compare('shop_closetime',$this->shop_closetime,true);
		$criteria->compare('shop_transportationcosts',$this->shop_transportationcosts);
		$criteria->compare('shop_deliveryfee',$this->shop_deliveryfee);
		$criteria->compare('shop_averagecost',$this->shop_averagecost);
		$criteria->compare('shop_remark',$this->shop_remark,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}