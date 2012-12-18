<?php
/* @var $this ShopsController */
/* @var $model TakeawayShops */

$this->breadcrumbs=array(
	'Takeaway Shops'=>array('index'),
	$model->shop_id=>array('view','id'=>$model->shop_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List TakeawayShops', 'url'=>array('index')),
	array('label'=>'Create TakeawayShops', 'url'=>array('create')),
	array('label'=>'View TakeawayShops', 'url'=>array('view', 'id'=>$model->shop_id)),
	array('label'=>'Manage TakeawayShops', 'url'=>array('admin')),
);
?>

<h1>Update TakeawayShops <?php echo $model->shop_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>