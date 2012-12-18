<?php
/* @var $this ShopsController */
/* @var $data TakeawayShops */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('shop_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->shop_id), array('view', 'id'=>$data->shop_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('shop_name')); ?>:</b>
	<?php echo CHtml::encode($data->shop_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('shop_tel1')); ?>:</b>
	<?php echo CHtml::encode($data->shop_tel1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('shop_tel2')); ?>:</b>
	<?php echo CHtml::encode($data->shop_tel2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('shop_address')); ?>:</b>
	<?php echo CHtml::encode($data->shop_address); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('shop_opentime')); ?>:</b>
	<?php echo CHtml::encode($data->shop_opentime); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('shop_closetime')); ?>:</b>
	<?php echo CHtml::encode($data->shop_closetime); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('shop_transportationcosts')); ?>:</b>
	<?php echo CHtml::encode($data->shop_transportationcosts); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('shop_deliveryfee')); ?>:</b>
	<?php echo CHtml::encode($data->shop_deliveryfee); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('shop_averagecost')); ?>:</b>
	<?php echo CHtml::encode($data->shop_averagecost); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('shop_remark')); ?>:</b>
	<?php echo CHtml::encode($data->shop_remark); ?>
	<br />

	*/ ?>

</div>