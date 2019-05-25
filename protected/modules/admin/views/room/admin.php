<?php
/* @var $this RoomController */
/* @var $model Room */


$this->menu=array(
	array('label'=>'List Room', 'url'=>array('index')),
	array('label'=>'Create Room', 'url'=>array('create')),
);

?>

<h1>Manage Rooms</h1>


<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'room-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'lang_id',
		'title',
		'duration',
		'cost',
		'description',
		/*
		'room_type_id',
		'hash',
		'image',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
