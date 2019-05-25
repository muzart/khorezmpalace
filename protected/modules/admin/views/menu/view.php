<?php
/* @var $this MenuController */
/* @var $model Menu */

$this->menu=array(
	array('label'=>'Создать меню', 'url'=>array('create')),
	array('label'=>'Редактировать', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Удалить', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Вы уверены?')),
	array('label'=>'Управление меню', 'url'=>array('admin')),
);
?>

<h1>Просмотр меню #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'lang_id',
		'name',
		'type',
	),
)); ?>
