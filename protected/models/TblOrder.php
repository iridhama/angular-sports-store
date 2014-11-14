<?php

/**
 * This is the model class for table "tbl_order".
 *
 * The followings are the available columns in table 'tbl_order':
 * @property integer $AutoId
 * @property string $TransactionId
 * @property integer $UserId
 * @property integer $product_id
 * @property string $Qty
 * @property integer $promotionid
 * @property string $discount
 * @property double $total_cost
 * @property string $payby
 * @property string $paypal_staus
 * @property string $paypal_date
 * @property string $pm_email
 * @property string $order_status
 * @property string $order_date
 * @property string $ip
 * @property string $city_name
 * @property string $remark
 * @property integer $invoiceid
 * @property string $shipping_status
 * @property string $shipping_country
 * @property integer $amount
 * @property integer $tax
 * @property double $shipping_charge
 * @property string $pay_method
 * @property string $pay_status
 * @property string $TransactionDate
 * @property string $status
 * @property string $checkout_name
 * @property string $checkout_address
 * @property string $checkout_mobile
 * @property string $checkout_message
 * @property string $checkout_pin_code
 * @property string $checkout_additional_requirment
 * @property integer $shipping_method
 */
class TblOrder extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_order';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('city_name, checkout_mobile, checkout_message, checkout_pin_code, checkout_additional_requirment', 'required'),
			array('UserId, product_id, promotionid, invoiceid, amount, tax, shipping_method', 'numerical', 'integerOnly'=>true),
			array('total_cost, shipping_charge', 'numerical'),
			array('TransactionId, Qty, shipping_country, pay_method', 'length', 'max'=>100),
			array('discount', 'length', 'max'=>50),
			array('payby, paypal_staus, paypal_date, pm_email, order_status, order_date, ip, remark', 'length', 'max'=>255),
			array('shipping_status', 'length', 'max'=>150),
			array('pay_status, status', 'length', 'max'=>1),
			array('TransactionDate, checkout_name, checkout_address', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('AutoId, TransactionId, UserId, product_id, Qty, promotionid, discount, total_cost, payby, paypal_staus, paypal_date, pm_email, order_status, order_date, ip, city_name, remark, invoiceid, shipping_status, shipping_country, amount, tax, shipping_charge, pay_method, pay_status, TransactionDate, status, checkout_name, checkout_address, checkout_mobile, checkout_message, checkout_pin_code, checkout_additional_requirment, shipping_method', 'safe', 'on'=>'search'),
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
			'AutoId' => 'Auto',
			'TransactionId' => 'Transaction',
			'UserId' => 'User',
			'product_id' => 'Product',
			'Qty' => 'Qty',
			'promotionid' => 'Promotionid',
			'discount' => 'Discount',
			'total_cost' => 'Total Cost',
			'payby' => 'Payby',
			'paypal_staus' => 'Paypal Staus',
			'paypal_date' => 'Paypal Date',
			'pm_email' => 'Pm Email',
			'order_status' => 'Order Status',
			'order_date' => 'Order Date',
			'ip' => 'Ip',
			'city_name' => 'City Name',
			'remark' => 'Remark',
			'invoiceid' => 'Invoiceid',
			'shipping_status' => 'Shipping Status',
			'shipping_country' => 'Shipping Country',
			'amount' => 'Amount',
			'tax' => 'Tax',
			'shipping_charge' => 'Shipping Charge',
			'pay_method' => 'Pay Method',
			'pay_status' => 'Pay Status',
			'TransactionDate' => 'Transaction Date',
			'status' => 'Status',
			'checkout_name' => 'Checkout Name',
			'checkout_address' => 'Checkout Address',
			'checkout_mobile' => 'Checkout Mobile',
			'checkout_message' => 'Checkout Message',
			'checkout_pin_code' => 'Checkout Pin Code',
			'checkout_additional_requirment' => 'Checkout Additional Requirment',
			'shipping_method' => 'Shipping Method',
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

		$criteria->compare('AutoId',$this->AutoId);
		$criteria->compare('TransactionId',$this->TransactionId,true);
		$criteria->compare('UserId',$this->UserId);
		$criteria->compare('product_id',$this->product_id);
		$criteria->compare('Qty',$this->Qty,true);
		$criteria->compare('promotionid',$this->promotionid);
		$criteria->compare('discount',$this->discount,true);
		$criteria->compare('total_cost',$this->total_cost);
		$criteria->compare('payby',$this->payby,true);
		$criteria->compare('paypal_staus',$this->paypal_staus,true);
		$criteria->compare('paypal_date',$this->paypal_date,true);
		$criteria->compare('pm_email',$this->pm_email,true);
		$criteria->compare('order_status',$this->order_status,true);
		$criteria->compare('order_date',$this->order_date,true);
		$criteria->compare('ip',$this->ip,true);
		$criteria->compare('city_name',$this->city_name,true);
		$criteria->compare('remark',$this->remark,true);
		$criteria->compare('invoiceid',$this->invoiceid);
		$criteria->compare('shipping_status',$this->shipping_status,true);
		$criteria->compare('shipping_country',$this->shipping_country,true);
		$criteria->compare('amount',$this->amount);
		$criteria->compare('tax',$this->tax);
		$criteria->compare('shipping_charge',$this->shipping_charge);
		$criteria->compare('pay_method',$this->pay_method,true);
		$criteria->compare('pay_status',$this->pay_status,true);
		$criteria->compare('TransactionDate',$this->TransactionDate,true);
		$criteria->compare('status',$this->status,true);
		$criteria->compare('checkout_name',$this->checkout_name,true);
		$criteria->compare('checkout_address',$this->checkout_address,true);
		$criteria->compare('checkout_mobile',$this->checkout_mobile,true);
		$criteria->compare('checkout_message',$this->checkout_message,true);
		$criteria->compare('checkout_pin_code',$this->checkout_pin_code,true);
		$criteria->compare('checkout_additional_requirment',$this->checkout_additional_requirment,true);
		$criteria->compare('shipping_method',$this->shipping_method);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return TblOrder the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
