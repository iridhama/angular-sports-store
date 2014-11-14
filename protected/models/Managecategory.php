<?php

/**
 * This is the model class for table "managecategory".
 *
 * The followings are the available columns in table 'managecategory':
 * @property integer $cat_id
 * @property integer $parent_id
 * @property string $cat_name
 * @property string $cat_title
 * @property string $cat_desc
 * @property string $content_desc
 * @property string $cat_image
 * @property string $feature
 * @property string $special_offer
 * @property string $status
 */
class Managecategory extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'managecategory';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('parent_id, cat_name, cat_title, cat_desc, content_desc, cat_image, feature, special_offer, status', 'required'),
			array('parent_id', 'numerical', 'integerOnly'=>true),
			array('status', 'length', 'max'=>10),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('cat_id, parent_id, cat_name, cat_title, cat_desc, content_desc, cat_image, feature, special_offer, status', 'safe', 'on'=>'search'),
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
			'cat_id' => 'Cat',
			'parent_id' => 'Parent',
			'cat_name' => 'Cat Name',
			'cat_title' => 'Cat Title',
			'cat_desc' => 'Cat Desc',
			'content_desc' => 'Content Desc',
			'cat_image' => 'Cat Image',
			'feature' => 'Feature',
			'special_offer' => 'Special Offer',
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

		$criteria->compare('cat_id',$this->cat_id);
		$criteria->compare('parent_id',$this->parent_id);
		$criteria->compare('cat_name',$this->cat_name,true);
		$criteria->compare('cat_title',$this->cat_title,true);
		$criteria->compare('cat_desc',$this->cat_desc,true);
		$criteria->compare('content_desc',$this->content_desc,true);
		$criteria->compare('cat_image',$this->cat_image,true);
		$criteria->compare('feature',$this->feature,true);
		$criteria->compare('special_offer',$this->special_offer,true);
		$criteria->compare('status',$this->status,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Managecategory the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
