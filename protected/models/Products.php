<?php

/**
 * This is the model class for table "products".
 *
 * The followings are the available columns in table 'products':
 * @property integer $id
 * @property string $name
 * @property string $tag
 * @property string $weight
 * @property string $number
 * @property string $description
 * @property string $short_description
 * @property string $featured_image
 * @property string $sku
 * @property string $status
 * @property string $new_from_date
 * @property string $new_to_date
 * @property string $catid
 * @property string $qty
 * @property string $show
 * @property string $bestseller
 * @property string $newarrival
 * @property string $promotion
 * @property double $usualprice
 * @property double $promprice
 * @property integer $stock
 * @property string $photo
 * @property integer $sold
 * @property string $dateadded
 * @property string $alt
 * @property string $accessories
 * @property string $mp3
 * @property string $title
 * @property string $color
 * @property string $icon_3g
 * @property string $icon_os
 * @property string $icon_touchscreen
 * @property string $icon_camera
 * @property string $icon_wifi
 * @property string $icon_bluetooth
 * @property string $icon_mp3
 * @property string $icon_fm
 * @property string $icon_video
 * @property string $icon_gps
 * @property string $icon_point3m
 * @property string $icon_1m
 * @property string $icon_2m
 * @property string $icon_3m
 * @property string $icon_5m
 * @property string $icon_8m
 * @property string $icon_12m
 * @property string $content
 * @property string $price
 * @property integer $discount
 * @property string $sprice
 * @property string $price_fromdate
 * @property string $price_todate
 * @property string $image
 * @property string $category
 * @property string $subcat
 * @property string $attribute
 * @property string $subattribute
 * @property string $color1
 * @property string $qty1
 * @property string $color2
 * @property string $qty2
 * @property string $color3
 * @property string $qty3
 * @property string $color4
 * @property string $qty4
 * @property string $color5
 * @property string $qty5
 * @property string $qtybelow
 * @property string $stockavailability
 * @property string $suggesid
 * @property string $suggesitem
 * @property string $introduction
 * @property string $meta_keyword
 * @property string $meta_desc
 * @property string $meta_title
 * @property string $seo_url
 * @property string $descriptionchi
 * @property string $youtubeurl
 */
class Products extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'products';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, weight, number, description', 'required'),
			array('stock, sold, discount', 'numerical', 'integerOnly'=>true),
			array('usualprice, promprice', 'numerical'),
			array('name, number, sku, status', 'length', 'max'=>200),
			array('weight', 'length', 'max'=>10),
			array('catid, image, category, subcat, attribute, subattribute, meta_keyword, meta_title, seo_url, youtubeurl', 'length', 'max'=>255),
			array('qty, photo', 'length', 'max'=>20),
			array('show, bestseller, newarrival, promotion, mp3', 'length', 'max'=>3),
			array('title', 'length', 'max'=>30),
			array('icon_3g, icon_os, icon_touchscreen, icon_camera, icon_wifi, icon_bluetooth, icon_mp3, icon_fm, icon_video, icon_gps, icon_point3m, icon_1m, icon_2m, icon_3m, icon_5m, icon_8m, icon_12m', 'length', 'max'=>1),
			array('price, sprice, color1, qty1, color2, qty2, color3, qty3, color4, qty4, color5, qty5, qtybelow, stockavailability, suggesid, suggesitem', 'length', 'max'=>225),
			array('tag, short_description, featured_image, new_from_date, new_to_date, dateadded, alt, accessories, color, content, price_fromdate, price_todate, introduction, meta_desc, descriptionchi', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, name, tag, weight, number, description, short_description, featured_image, sku, status, new_from_date, new_to_date, catid, qty, show, bestseller, newarrival, promotion, usualprice, promprice, stock, photo, sold, dateadded, alt, accessories, mp3, title, color, icon_3g, icon_os, icon_touchscreen, icon_camera, icon_wifi, icon_bluetooth, icon_mp3, icon_fm, icon_video, icon_gps, icon_point3m, icon_1m, icon_2m, icon_3m, icon_5m, icon_8m, icon_12m, content, price, discount, sprice, price_fromdate, price_todate, image, category, subcat, attribute, subattribute, color1, qty1, color2, qty2, color3, qty3, color4, qty4, color5, qty5, qtybelow, stockavailability, suggesid, suggesitem, introduction, meta_keyword, meta_desc, meta_title, seo_url, descriptionchi, youtubeurl', 'safe', 'on'=>'search'),
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
			'name' => 'Name',
			'tag' => 'Tag',
			'weight' => 'Weight',
			'number' => 'Number',
			'description' => 'Description',
			'short_description' => 'Short Description',
			'featured_image' => 'Featured Image',
			'sku' => 'Sku',
			'status' => 'Status',
			'new_from_date' => 'New From Date',
			'new_to_date' => 'New To Date',
			'catid' => 'Catid',
			'qty' => 'Qty',
			'show' => 'Show',
			'bestseller' => 'Bestseller',
			'newarrival' => 'Newarrival',
			'promotion' => 'Promotion',
			'usualprice' => 'Usualprice',
			'promprice' => 'Promprice',
			'stock' => 'Stock',
			'photo' => 'Photo',
			'sold' => 'Sold',
			'dateadded' => 'Dateadded',
			'alt' => 'Alt',
			'accessories' => 'Accessories',
			'mp3' => 'Mp3',
			'title' => 'Title',
			'color' => 'Color',
			'icon_3g' => 'Icon 3g',
			'icon_os' => 'Icon Os',
			'icon_touchscreen' => 'Icon Touchscreen',
			'icon_camera' => 'Icon Camera',
			'icon_wifi' => 'Icon Wifi',
			'icon_bluetooth' => 'Icon Bluetooth',
			'icon_mp3' => 'Icon Mp3',
			'icon_fm' => 'Icon Fm',
			'icon_video' => 'Icon Video',
			'icon_gps' => 'Icon Gps',
			'icon_point3m' => 'Icon Point3m',
			'icon_1m' => 'Icon 1m',
			'icon_2m' => 'Icon 2m',
			'icon_3m' => 'Icon 3m',
			'icon_5m' => 'Icon 5m',
			'icon_8m' => 'Icon 8m',
			'icon_12m' => 'Icon 12m',
			'content' => 'Content',
			'price' => 'Price',
			'discount' => 'Discount',
			'sprice' => 'Sprice',
			'price_fromdate' => 'Price Fromdate',
			'price_todate' => 'Price Todate',
			'image' => 'Image',
			'category' => 'Category',
			'subcat' => 'Subcat',
			'attribute' => 'Attribute',
			'subattribute' => 'Subattribute',
			'color1' => 'Color1',
			'qty1' => 'Qty1',
			'color2' => 'Color2',
			'qty2' => 'Qty2',
			'color3' => 'Color3',
			'qty3' => 'Qty3',
			'color4' => 'Color4',
			'qty4' => 'Qty4',
			'color5' => 'Color5',
			'qty5' => 'Qty5',
			'qtybelow' => 'Qtybelow',
			'stockavailability' => 'Stockavailability',
			'suggesid' => 'Suggesid',
			'suggesitem' => 'Suggesitem',
			'introduction' => 'Introduction',
			'meta_keyword' => 'Meta Keyword',
			'meta_desc' => 'Meta Desc',
			'meta_title' => 'Meta Title',
			'seo_url' => 'Seo Url',
			'descriptionchi' => 'Descriptionchi',
			'youtubeurl' => 'Youtubeurl',
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
		$criteria->compare('name',$this->name,true);
		$criteria->compare('tag',$this->tag,true);
		$criteria->compare('weight',$this->weight,true);
		$criteria->compare('number',$this->number,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('short_description',$this->short_description,true);
		$criteria->compare('featured_image',$this->featured_image,true);
		$criteria->compare('sku',$this->sku,true);
		$criteria->compare('status',$this->status,true);
		$criteria->compare('new_from_date',$this->new_from_date,true);
		$criteria->compare('new_to_date',$this->new_to_date,true);
		$criteria->compare('catid',$this->catid,true);
		$criteria->compare('qty',$this->qty,true);
		$criteria->compare('show',$this->show,true);
		$criteria->compare('bestseller',$this->bestseller,true);
		$criteria->compare('newarrival',$this->newarrival,true);
		$criteria->compare('promotion',$this->promotion,true);
		$criteria->compare('usualprice',$this->usualprice);
		$criteria->compare('promprice',$this->promprice);
		$criteria->compare('stock',$this->stock);
		$criteria->compare('photo',$this->photo,true);
		$criteria->compare('sold',$this->sold);
		$criteria->compare('dateadded',$this->dateadded,true);
		$criteria->compare('alt',$this->alt,true);
		$criteria->compare('accessories',$this->accessories,true);
		$criteria->compare('mp3',$this->mp3,true);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('color',$this->color,true);
		$criteria->compare('icon_3g',$this->icon_3g,true);
		$criteria->compare('icon_os',$this->icon_os,true);
		$criteria->compare('icon_touchscreen',$this->icon_touchscreen,true);
		$criteria->compare('icon_camera',$this->icon_camera,true);
		$criteria->compare('icon_wifi',$this->icon_wifi,true);
		$criteria->compare('icon_bluetooth',$this->icon_bluetooth,true);
		$criteria->compare('icon_mp3',$this->icon_mp3,true);
		$criteria->compare('icon_fm',$this->icon_fm,true);
		$criteria->compare('icon_video',$this->icon_video,true);
		$criteria->compare('icon_gps',$this->icon_gps,true);
		$criteria->compare('icon_point3m',$this->icon_point3m,true);
		$criteria->compare('icon_1m',$this->icon_1m,true);
		$criteria->compare('icon_2m',$this->icon_2m,true);
		$criteria->compare('icon_3m',$this->icon_3m,true);
		$criteria->compare('icon_5m',$this->icon_5m,true);
		$criteria->compare('icon_8m',$this->icon_8m,true);
		$criteria->compare('icon_12m',$this->icon_12m,true);
		$criteria->compare('content',$this->content,true);
		$criteria->compare('price',$this->price,true);
		$criteria->compare('discount',$this->discount);
		$criteria->compare('sprice',$this->sprice,true);
		$criteria->compare('price_fromdate',$this->price_fromdate,true);
		$criteria->compare('price_todate',$this->price_todate,true);
		$criteria->compare('image',$this->image,true);
		$criteria->compare('category',$this->category,true);
		$criteria->compare('subcat',$this->subcat,true);
		$criteria->compare('attribute',$this->attribute,true);
		$criteria->compare('subattribute',$this->subattribute,true);
		$criteria->compare('color1',$this->color1,true);
		$criteria->compare('qty1',$this->qty1,true);
		$criteria->compare('color2',$this->color2,true);
		$criteria->compare('qty2',$this->qty2,true);
		$criteria->compare('color3',$this->color3,true);
		$criteria->compare('qty3',$this->qty3,true);
		$criteria->compare('color4',$this->color4,true);
		$criteria->compare('qty4',$this->qty4,true);
		$criteria->compare('color5',$this->color5,true);
		$criteria->compare('qty5',$this->qty5,true);
		$criteria->compare('qtybelow',$this->qtybelow,true);
		$criteria->compare('stockavailability',$this->stockavailability,true);
		$criteria->compare('suggesid',$this->suggesid,true);
		$criteria->compare('suggesitem',$this->suggesitem,true);
		$criteria->compare('introduction',$this->introduction,true);
		$criteria->compare('meta_keyword',$this->meta_keyword,true);
		$criteria->compare('meta_desc',$this->meta_desc,true);
		$criteria->compare('meta_title',$this->meta_title,true);
		$criteria->compare('seo_url',$this->seo_url,true);
		$criteria->compare('descriptionchi',$this->descriptionchi,true);
		$criteria->compare('youtubeurl',$this->youtubeurl,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Products the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
