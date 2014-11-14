<?php

/**
 * This is the model class for table "publish_ads".
 *
 * The followings are the available columns in table 'publish_ads':
 * @property integer $id
 * @property integer $member_id
 * @property string $image
 * @property string $featured_ads
 * @property integer $category_id
 * @property string $suggested_title
 * @property string $description
 * @property string $price
 * @property string $location
 * @property string $status
 */
class PublishAds extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'publish_ads';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('member_id, image, featured_ads, category_id, suggested_title, description, price, location, status', 'required'),
			array('member_id, category_id', 'numerical', 'integerOnly'=>true),
			array('price', 'length', 'max'=>10),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, member_id, image, featured_ads, category_id, suggested_title, description, price, location, status', 'safe', 'on'=>'search'),
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
			'member_id' => 'Member',
			'image' => 'Image',
			'featured_ads' => 'Featured Ads',
			'category_id' => 'Category',
			'suggested_title' => 'Suggested Title',
			'description' => 'Description',
			'price' => 'Price',
			'location' => 'Location',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('member_id',$this->member_id);
		$criteria->compare('image',$this->image,true);
		$criteria->compare('featured_ads',$this->featured_ads,true);
		$criteria->compare('category_id',$this->category_id);
		$criteria->compare('suggested_title',$this->suggested_title,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('price',$this->price,true);
		$criteria->compare('location',$this->location,true);
		$criteria->compare('status',$this->status,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return PublishAds the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
