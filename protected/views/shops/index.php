<?php
/* @var $this ShopsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Takeaway Shops',
);

$this->menu=array(
	array('label'=>'Create TakeawayShops', 'url'=>array('create')),
	array('label'=>'Manage TakeawayShops', 'url'=>array('admin')),
);
?>

<h1>Takeaway Shops</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
