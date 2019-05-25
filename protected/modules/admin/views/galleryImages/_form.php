<?php
/* @var $this GalleryImagesController */
/* @var $model GalleryImages */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'gallery-images-form',
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
		<?php echo $form->labelEx($model,'gallery_id'); ?>
		<?php echo $form->dropDownList($model,'gallery_id',Gallery::getAll()); ?>
		<?php echo $form->error($model,'gallery_id'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'image'); ?>
		<?php echo $form->fileField($model,'image'); ?>
		<?php echo $form->error($model,'image'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'description_uz'); ?>
		<?php echo $form->textArea($model,'description_uz',array('form-groups'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'description_uz'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'description_ru'); ?>
		<?php echo $form->textArea($model,'description_ru',array('form-groups'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'description_ru'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'description_en'); ?>
		<?php echo $form->textArea($model,'description_en',array('form-groups'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'description_en'); ?>
	</div>

	<div class="form-group buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Создать' : 'Сохранить',array('class'=>'btn btn-primary')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->