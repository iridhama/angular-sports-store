<?php

/**
 * This is the model class for table "member".
 *
 * The followings are the available columns in table 'member':
 * @property integer $id
 * @property string $email
 * @property string $firstname
 * @property string $lastname
 * @property string $catid
 * @property string $secemail
 * @property string $password
 * @property string $surname
 * @property string $nick
 * @property string $given
 * @property string $gender
 * @property string $dob
 * @property integer $day
 * @property integer $month
 * @property integer $year
 * @property string $country
 * @property integer $state
 * @property integer $city
 * @property string $add1
 * @property string $add2
 * @property integer $postal
 * @property string $country_code
 * @property string $home
 * @property string $mobile
 * @property integer $mile
 * @property string $status
 * @property string $wishlist
 * @property string $category
 * @property string $subcat
 * @property string $interest
 * @property string $lastLogin
 * @property string $activation_id
 * @property string $image
 * @property string $id_no
 * @property string $babyname
 * @property string $babydob
 * @property string $company
 * @property string $job_desc
 * @property integer $zip_code
 * @property string $workphone
 */
class Member extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'member';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('email, password, nick, day, month, year, country, state, city, add1, country_code, mobile, category, company, job_desc, zip_code, workphone', 'required'),
			array('day, month, year, state, city, postal, mile, zip_code', 'numerical', 'integerOnly'=>true),
			array('email, secemail, surname, given, status', 'length', 'max'=>80),
			array('catid, category, subcat, interest, image, company, job_desc', 'length', 'max'=>255),
			array('password, nick', 'length', 'max'=>40),
			array('dob, country, home, mobile, activation_id, workphone', 'length', 'max'=>20),
			array('country_code', 'length', 'max'=>10),
			array('lastLogin, babyname', 'length', 'max'=>50),
			array('babydob', 'length', 'max'=>15),
			array('firstname, lastname, gender, add2, wishlist, id_no', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, email, firstname, lastname, catid, secemail, password, surname, nick, given, gender, dob, day, month, year, country, state, city, add1, add2, postal, country_code, home, mobile, mile, status, wishlist, category, subcat, interest, lastLogin, activation_id, image, id_no, babyname, babydob, company, job_desc, zip_code, workphone', 'safe', 'on'=>'search'),
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
			'email' => 'Email',
			'firstname' => 'Firstname',
			'lastname' => 'Lastname',
			'catid' => 'Catid',
			'secemail' => 'Secemail',
			'password' => 'Password',
			'surname' => 'Surname',
			'nick' => 'Nick',
			'given' => 'Given',
			'gender' => 'Gender',
			'dob' => 'Dob',
			'day' => 'Day',
			'month' => 'Month',
			'year' => 'Year',
			'country' => 'Country',
			'state' => 'State',
			'city' => 'City',
			'add1' => 'Add1',
			'add2' => 'Add2',
			'postal' => 'Postal',
			'country_code' => 'Country Code',
			'home' => 'Home',
			'mobile' => 'Mobile',
			'mile' => 'Mile',
			'status' => 'Status',
			'wishlist' => 'Wishlist',
			'category' => 'Category',
			'subcat' => 'Subcat',
			'interest' => 'Interest',
			'lastLogin' => 'Last Login',
			'activation_id' => 'Activation',
			'image' => 'Image',
			'id_no' => 'Id No',
			'babyname' => 'Babyname',
			'babydob' => 'Babydob',
			'company' => 'Company',
			'job_desc' => 'Job Desc',
			'zip_code' => 'Zip Code',
			'workphone' => 'Workphone',
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
		$criteria->compare('email',$this->email,true);
		$criteria->compare('firstname',$this->firstname,true);
		$criteria->compare('lastname',$this->lastname,true);
		$criteria->compare('catid',$this->catid,true);
		$criteria->compare('secemail',$this->secemail,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('surname',$this->surname,true);
		$criteria->compare('nick',$this->nick,true);
		$criteria->compare('given',$this->given,true);
		$criteria->compare('gender',$this->gender,true);
		$criteria->compare('dob',$this->dob,true);
		$criteria->compare('day',$this->day);
		$criteria->compare('month',$this->month);
		$criteria->compare('year',$this->year);
		$criteria->compare('country',$this->country,true);
		$criteria->compare('state',$this->state);
		$criteria->compare('city',$this->city);
		$criteria->compare('add1',$this->add1,true);
		$criteria->compare('add2',$this->add2,true);
		$criteria->compare('postal',$this->postal);
		$criteria->compare('country_code',$this->country_code,true);
		$criteria->compare('home',$this->home,true);
		$criteria->compare('mobile',$this->mobile,true);
		$criteria->compare('mile',$this->mile);
		$criteria->compare('status',$this->status,true);
		$criteria->compare('wishlist',$this->wishlist,true);
		$criteria->compare('category',$this->category,true);
		$criteria->compare('subcat',$this->subcat,true);
		$criteria->compare('interest',$this->interest,true);
		$criteria->compare('lastLogin',$this->lastLogin,true);
		$criteria->compare('activation_id',$this->activation_id,true);
		$criteria->compare('image',$this->image,true);
		$criteria->compare('id_no',$this->id_no,true);
		$criteria->compare('babyname',$this->babyname,true);
		$criteria->compare('babydob',$this->babydob,true);
		$criteria->compare('company',$this->company,true);
		$criteria->compare('job_desc',$this->job_desc,true);
		$criteria->compare('zip_code',$this->zip_code);
		$criteria->compare('workphone',$this->workphone,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Member the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
