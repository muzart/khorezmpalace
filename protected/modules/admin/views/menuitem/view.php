<?php
/* @var $this MenuitemController */
/* @var $model Menuitem */

$this->breadcrumbs=array(
	'Menuitems'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'Создать элемент меню', 'url'=>array('create')),
	array('label'=>'Редактировать', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Удалить элемент меню', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Вы увурены?')),
	array('label'=>'Управление элементами меню', 'url'=>array('admin')),
);
?>

<h1>Просмотр #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'menu_id',
		'title',
		'parent_id',
		'url',
	),
)); ?>
