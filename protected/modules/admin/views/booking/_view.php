<?php
/* @var $this BookingController */
/* @var $data Booking */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('your_name')); ?>:</b>
	<?php echo CHtml::encode($data->your_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::encode($data->email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('room_type')); ?>:</b>
	<?php echo CHtml::encode($data->room_type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rooms')); ?>:</b>
	<?php echo CHtml::encode($data->rooms); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('adults')); ?>:</b>
	<?php echo CHtml::encode($data->adults); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('childs')); ?>:</b>
	<?php echo CHtml::encode($data->childs); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('check_in')); ?>:</b>
	<?php echo CHtml::encode($data->check_in); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('check_in_time')); ?>:</b>
	<?php echo CHtml::encode($data->check_in_time); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('check_out')); ?>:</b>
	<?php echo CHtml::encode($data->check_out); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('check_out_time')); ?>:</b>
	<?php echo CHtml::encode($data->check_out_time); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('created')); ?>:</b>
	<?php echo CHtml::encode($data->created); ?>
	<br />

	*/ ?>

</div>