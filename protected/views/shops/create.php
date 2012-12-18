<?php
/* @var $this ShopsController */
/* @var $model TakeawayShops */

$this->breadcrumbs=array(
	'Takeaway Shops'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TakeawayShops', 'url'=>array('index')),
	array('label'=>'Manage TakeawayShops', 'url'=>array('admin')),
);
?>

<h1>Create TakeawayShops</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>