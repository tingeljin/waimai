<?php
/* @var $this ShopsController */
/* @var $model TakeawayShops */

$this->breadcrumbs=array(
	'Takeaway Shops'=>array('index'),
	$model->shop_id,
);

$this->menu=array(
	array('label'=>'List TakeawayShops', 'url'=>array('index')),
	array('label'=>'Create TakeawayShops', 'url'=>array('create')),
	array('label'=>'Update TakeawayShops', 'url'=>array('update', 'id'=>$model->shop_id)),
	array('label'=>'Delete TakeawayShops', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->shop_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TakeawayShops', 'url'=>array('admin')),
);
?>

<h1>View TakeawayShops #<?php echo $model->shop_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'shop_id',
		'shop_name',
		'shop_tel1',
		'shop_tel2',
		'shop_address',
		'shop_opentime',
		'shop_closetime',
		'shop_transportationcosts',
		'shop_deliveryfee',
		'shop_averagecost',
		'shop_remark',
	),
)); ?>
