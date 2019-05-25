<?php
/* @var $this RoomTypeController */
/* @var $model RoomType */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'room-type-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
	'htmlOptions'=>array(
		'enctype'=>'multipart/form-data'
	)
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="form-group">
		<?php echo $form->labelEx($model,'name'); ?><br>
		<?php echo $form->textField($model,'name',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'lang_id'); ?><br>
		<?php echo $form->dropDownList($model,'lang_id',array(1=>'uz',2=>'ru',3=>'en')); ?>
		<?php echo $form->error($model,'lang_id'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'hash'); ?><br>
		<?php echo $form->textField($model,'hash',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'hash'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'img'); ?><br>
		<?php echo $form->fileField($model,'image_file'); ?>
		<?php echo $form->error($model,'img'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'img'); ?><br>
		<?php echo $form->textField($model,'img'); ?>
		<?php echo $form->error($model,'img'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'cost'); ?><br>
		<?php echo $form->textField($model,'cost'); ?>
		<?php echo $form->error($model,'cost'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'description'); ?><br>
		<?php $this->widget('ext.ckeditor.CKEditor', array( 'model'=>$model, 'attribute'=>'description', 'language'=>'ru', 'editorTemplate'=>'full', )); ?>
		<?php echo $form->error($model,'description'); ?>
	</div>

	<div class="form-group buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Создать' : 'Сохранить',array('class'=>'btn btn-primary')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->