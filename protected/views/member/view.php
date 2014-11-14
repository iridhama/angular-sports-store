<?php
/* @var $this MemberController */
/* @var $model Member */

$this->breadcrumbs=array(
	'Members'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Member', 'url'=>array('index')),
	array('label'=>'Create Member', 'url'=>array('create')),
	array('label'=>'Update Member', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Member', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Member', 'url'=>array('admin')),
);
?>

<h1>View Member #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'email',
		'firstname',
		'lastname',
		'catid',
		'secemail',
		'password',
		'surname',
		'nick',
		'given',
		'gender',
		'dob',
		'day',
		'month',
		'year',
		'country',
		'state',
		'city',
		'add1',
		'add2',
		'postal',
		'country_code',
		'home',
		'mobile',
		'mile',
		'status',
		'wishlist',
		'category',
		'subcat',
		'interest',
		'lastLogin',
		'activation_id',
		'image',
		'id_no',
		'babyname',
		'babydob',
		'company',
		'job_desc',
		'zip_code',
		'workphone',
	),
)); ?>
