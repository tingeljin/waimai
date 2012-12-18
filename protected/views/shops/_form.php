<?php
/* @var $this ShopsController */
/* @var $model TakeawayShops */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'takeaway-shops-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'shop_name'); ?>
		<?php echo $form->textField($model,'shop_name',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'shop_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'shop_tel1'); ?>
		<?php echo $form->textField($model,'shop_tel1',array('size'=>12,'maxlength'=>12)); ?>
		<?php echo $form->error($model,'shop_tel1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'shop_tel2'); ?>
		<?php echo $form->textField($model,'shop_tel2',array('size'=>12,'maxlength'=>12)); ?>
		<?php echo $form->error($model,'shop_tel2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'shop_address'); ?>
		<?php echo $form->textField($model,'shop_address',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'shop_address'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'shop_opentime'); ?>
		<?php echo $form->textField($model,'shop_opentime'); ?>
		<?php echo $form->error($model,'shop_opentime'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'shop_closetime'); ?>
		<?php echo $form->textField($model,'shop_closetime'); ?>
		<?php echo $form->error($model,'shop_closetime'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'shop_transportationcosts'); ?>
		<?php echo $form->textField($model,'shop_transportationcosts'); ?>
		<?php echo $form->error($model,'shop_transportationcosts'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'shop_deliveryfee'); ?>
		<?php echo $form->textField($model,'shop_deliveryfee'); ?>
		<?php echo $form->error($model,'shop_deliveryfee'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'shop_averagecost'); ?>
		<?php echo $form->textField($model,'shop_averagecost'); ?>
		<?php echo $form->error($model,'shop_averagecost'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'shop_remark'); ?>
		<?php echo $form->textField($model,'shop_remark',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'shop_remark'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->