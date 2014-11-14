<?php

/**
 * This is the model class for table "manage_product".
 *
 * The followings are the available columns in table 'manage_product':
 * @property integer $product_id
 * @property integer $parent_id
 * @property string $product_name
 * @property string $product_title
 * @property string $product_desc
 * @property string $sku
 * @property string $product_price
 * @property string $product_thumbnail
 * @property string $order_tomorrow_status
 * @property integer $product_category
 * @property string $display_on_front
 * @property string $release_date
 * @property string $status
 */
class ManageProduct extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'manage_product';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('parent_id, product_name, product_title, product_desc, sku, product_price, product_thumbnail, order_tomorrow_status, product_category, display_on_front, release_date, status', 'required'),
			array('parent_id, product_category', 'numerical', 'integerOnly'=>true),
			array('product_price, status', 'length', 'max'=>10),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('product_id, parent_id, product_name, product_title, product_desc, sku, product_price, product_thumbnail, order_tomorrow_status, product_category, display_on_front, release_date, status', 'safe', 'on'=>'search'),
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
			'product_id' => 'Product',
			'parent_id' => 'Parent',
			'product_name' => 'Product Name',
			'product_title' => 'Product Title',
			'product_desc' => 'Product Desc',
			'sku' => 'Sku',
			'product_price' => 'Product Price',
			'product_thumbnail' => 'Product Thumbnail',
			'order_tomorrow_status' => 'Order Tomorrow Status',
			'product_category' => 'Product Category',
			'display_on_front' => 'Display On Front',
			'release_date' => 'Release Date',
			'status' => 'Status',
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

		$criteria->compare('product_id',$this->product_id);
		$criteria->compare('parent_id',$this->parent_id);
		$criteria->compare('product_name',$this->product_name,true);
		$criteria->compare('product_title',$this->product_title,true);
		$criteria->compare('product_desc',$this->product_desc,true);
		$criteria->compare('sku',$this->sku,true);
		$criteria->compare('product_price',$this->product_price,true);
		$criteria->compare('product_thumbnail',$this->product_thumbnail,true);
		$criteria->compare('order_tomorrow_status',$this->order_tomorrow_status,true);
		$criteria->compare('product_category',$this->product_category);
		$criteria->compare('display_on_front',$this->display_on_front,true);
		$criteria->compare('release_date',$this->release_date,true);
		$criteria->compare('status',$this->status,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return ManageProduct the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
