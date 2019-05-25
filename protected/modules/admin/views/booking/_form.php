<?php
/* @var $this BookingController */
/* @var $model Booking */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'booking-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'your_name'); ?>
		<?php echo $form->textField($model,'your_name',array('size'=>40,'maxlength'=>40)); ?>
		<?php echo $form->error($model,'your_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>80)); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'room_type'); ?>
		<?php echo $form->textField($model,'room_type',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'room_type'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'rooms'); ?>
		<?php echo $form->textField($model,'rooms',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'rooms'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'adults'); ?>
		<?php echo $form->textField($model,'adults',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'adults'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'childs'); ?>
		<?php echo $form->textField($model,'childs',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'childs'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'check_in'); ?>
		<?php echo $form->textField($model,'check_in',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'check_in'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'check_in_time'); ?>
		<?php echo $form->textField($model,'check_in_time',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'check_in_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'check_out'); ?>
		<?php echo $form->textField($model,'check_out',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'check_out'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'check_out_time'); ?>
		<?php echo $form->textField($model,'check_out_time',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'check_out_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'created'); ?>
		<?php echo $form->textField($model,'created'); ?>
		<?php echo $form->error($model,'created'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->