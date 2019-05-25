<?php
/* @var $this BookingController */
/* @var $model Booking */

$this->menu=array(
	array('label'=>'Удалить Booking', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Управление Booking', 'url'=>array('admin')),
);
?>

<h1>Booking #<?php echo $model->id; ?> - <?=$model->replied ? 'Отвечено': 'Не отвечено'?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'your_name',
		'email',
		'room_type',
		'rooms',
		'adults',
		'childs',
		'check_in',
		'check_in_time',
		'check_out',
		'check_out_time',
		array(
			'name'=>'created',
			'value'=>date('H:i:s d-m-Y',$model->created)
		),
		array(
			'name' => 'replied',
			'value' => $model->replied == -1 ? "Отказано" : ($model->replied == 1 ? "Подтверждено" : "Не отвечено"),
		)
	),
)); ?>
<?php if($model->replied == 0):?>
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'booking-reply-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>
	<?php echo CHtml::submitButton('Подтверждать',array('class'=>'btn btn-success','name'=>'btnConfirm')); ?>
	<?php echo CHtml::submitButton('Отказать',array('class'=>'btn btn-danger','name'=>'btnDeny')); ?>

<?php $this->endWidget(); ?>
<?php endif;?>