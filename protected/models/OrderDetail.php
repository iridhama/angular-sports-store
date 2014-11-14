<?php

/**
 * This is the model class for table "order_detail".
 *
 * The followings are the available columns in table 'order_detail':
 * @property integer $AutoId
 * @property integer $order_id
 * @property string $UserId
 * @property string $productid
 * @property double $product_price
 * @property double $total_price
 * @property integer $qty
 * @property integer $clip_linings
 * @property integer $clips
 * @property integer $ribbon1
 * @property integer $ribbon2
 * @property integer $ribbon3
 * @property integer $orientations
 * @property integer $colors
 * @property integer $embellishments
 * @property integer $sizes
 * @property integer $fabrics
 * @property integer $wood_designs
 * @property string $remarks
 * @property string $status
 * @property string $TransactionDate
 */
class OrderDetail extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'order_detail';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('order_id, UserId, productid, product_price, total_price, qty', 'required'),
			array('order_id, qty, clip_linings, clips, ribbon1, ribbon2, ribbon3, orientations, colors, embellishments, sizes, fabrics, wood_designs', 'numerical', 'integerOnly'=>true),
			array('product_price, total_price', 'numerical'),
			array('UserId', 'length', 'max'=>200),
			array('productid', 'length', 'max'=>100),
			array('status', 'length', 'max'=>1),
			array('remarks, TransactionDate', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('AutoId, order_id, UserId, productid, product_price, total_price, qty, clip_linings, clips, ribbon1, ribbon2, ribbon3, orientations, colors, embellishments, sizes, fabrics, wood_designs, remarks, status, TransactionDate', 'safe', 'on'=>'search'),
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
			'order_id' => 'Order',
			'UserId' => 'User',
			'productid' => 'Productid',
			'product_price' => 'Product Price',
			'total_price' => 'Total Price',
			'qty' => 'Qty',
			'clip_linings' => 'Clip Linings',
			'clips' => 'Clips',
			'ribbon1' => 'Ribbon1',
			'ribbon2' => 'Ribbon2',
			'ribbon3' => 'Ribbon3',
			'orientations' => 'Orientations',
			'colors' => 'Colors',
			'embellishments' => 'Embellishments',
			'sizes' => 'Sizes',
			'fabrics' => 'Fabrics',
			'wood_designs' => 'Wood Designs',
			'remarks' => 'Remarks',
			'status' => 'Status',
			'TransactionDate' => 'Transaction Date',
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
		$criteria->compare('order_id',$this->order_id);
		$criteria->compare('UserId',$this->UserId,true);
		$criteria->compare('productid',$this->productid,true);
		$criteria->compare('product_price',$this->product_price);
		$criteria->compare('total_price',$this->total_price);
		$criteria->compare('qty',$this->qty);
		$criteria->compare('clip_linings',$this->clip_linings);
		$criteria->compare('clips',$this->clips);
		$criteria->compare('ribbon1',$this->ribbon1);
		$criteria->compare('ribbon2',$this->ribbon2);
		$criteria->compare('ribbon3',$this->ribbon3);
		$criteria->compare('orientations',$this->orientations);
		$criteria->compare('colors',$this->colors);
		$criteria->compare('embellishments',$this->embellishments);
		$criteria->compare('sizes',$this->sizes);
		$criteria->compare('fabrics',$this->fabrics);
		$criteria->compare('wood_designs',$this->wood_designs);
		$criteria->compare('remarks',$this->remarks,true);
		$criteria->compare('status',$this->status,true);
		$criteria->compare('TransactionDate',$this->TransactionDate,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return OrderDetail the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
