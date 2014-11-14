<?php

/**
 * This is the model class for table "temp_order".
 *
 * The followings are the available columns in table 'temp_order':
 * @property integer $id
 * @property string $userid
 * @property string $productid
 * @property string $item_type
 * @property double $product_price
 * @property string $shipping_charge
 * @property double $total_price
 * @property string $delivery_date
 * @property integer $delivery_city
 * @property double $total_weight
 * @property integer $qty
 * @property integer $ordertime
 */
class TempOrder extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'temp_order';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('shipping_charge, delivery_date, delivery_city, total_weight', 'required'),
			array('delivery_city, qty, ordertime', 'numerical', 'integerOnly'=>true),
			array('product_price, total_price, total_weight', 'numerical'),
			array('userid', 'length', 'max'=>200),
			array('productid, item_type', 'length', 'max'=>100),
			array('shipping_charge', 'length', 'max'=>10),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, userid, productid, item_type, product_price, shipping_charge, total_price, delivery_date, delivery_city, total_weight, qty, ordertime', 'safe', 'on'=>'search'),
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
			'id' => 'ID',
			'userid' => 'Userid',
			'productid' => 'Productid',
			'item_type' => 'Item Type',
			'product_price' => 'Product Price',
			'shipping_charge' => 'Shipping Charge',
			'total_price' => 'Total Price',
			'delivery_date' => 'Delivery Date',
			'delivery_city' => 'Delivery City',
			'total_weight' => 'Total Weight',
			'qty' => 'Qty',
			'ordertime' => 'Ordertime',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('userid',$this->userid,true);
		$criteria->compare('productid',$this->productid,true);
		$criteria->compare('item_type',$this->item_type,true);
		$criteria->compare('product_price',$this->product_price);
		$criteria->compare('shipping_charge',$this->shipping_charge,true);
		$criteria->compare('total_price',$this->total_price);
		$criteria->compare('delivery_date',$this->delivery_date,true);
		$criteria->compare('delivery_city',$this->delivery_city);
		$criteria->compare('total_weight',$this->total_weight);
		$criteria->compare('qty',$this->qty);
		$criteria->compare('ordertime',$this->ordertime);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return TempOrder the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
