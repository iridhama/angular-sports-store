<?php

/**
 * This is the model class for table "staticpage".
 *
 * The followings are the available columns in table 'staticpage':
 * @property integer $id
 * @property string $pagetitle
 * @property string $pagename
 * @property string $paget
 * @property string $search
 * @property string $search1
 * @property string $content
 * @property string $url
 * @property string $banner2
 * @property string $status
 */
class Staticpage extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'staticpage';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('pagetitle, pagename, search, search1, content, status', 'required'),
			array('pagetitle, pagename, paget, search, search1', 'length', 'max'=>255),
			array('banner2', 'length', 'max'=>256),
			array('url', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, pagetitle, pagename, paget, search, search1, content, url, banner2, status', 'safe', 'on'=>'search'),
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
			'pagetitle' => 'Pagetitle',
			'pagename' => 'Pagename',
			'paget' => 'Paget',
			'search' => 'Search',
			'search1' => 'Search1',
			'content' => 'Content',
			'url' => 'Url',
			'banner2' => 'Banner2',
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
		$criteria->compare('pagetitle',$this->pagetitle,true);
		$criteria->compare('pagename',$this->pagename,true);
		$criteria->compare('paget',$this->paget,true);
		$criteria->compare('search',$this->search,true);
		$criteria->compare('search1',$this->search1,true);
		$criteria->compare('content',$this->content,true);
		$criteria->compare('url',$this->url,true);
		$criteria->compare('banner2',$this->banner2,true);
		$criteria->compare('status',$this->status,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Staticpage the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
