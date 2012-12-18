<?php
/* @var $this ShopsController */
/* @var $model TakeawayShops */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'shop_id'); ?>
		<?php echo $form->textField($model,'shop_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'shop_name'); ?>
		<?php echo $form->textField($model,'shop_name',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'shop_tel1'); ?>
		<?php echo $form->textField($model,'shop_tel1',array('size'=>12,'maxlength'=>12)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'shop_tel2'); ?>
		<?php echo $form->textField($model,'shop_tel2',array('size'=>12,'maxlength'=>12)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'shop_address'); ?>
		<?php echo $form->textField($model,'shop_address',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'shop_opentime'); ?>
		<?php echo $form->textField($model,'shop_opentime'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'shop_closetime'); ?>
		<?php echo $form->textField($model,'shop_closetime'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'shop_transportationcosts'); ?>
		<?php echo $form->textField($model,'shop_transportationcosts'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'shop_deliveryfee'); ?>
		<?php echo $form->textField($model,'shop_deliveryfee'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'shop_averagecost'); ?>
		<?php echo $form->textField($model,'shop_averagecost'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'shop_remark'); ?>
		<?php echo $form->textField($model,'shop_remark',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->