<?php
/* @var $this MenuitemController */
/* @var $model Menuitem */

$this->breadcrumbs=array(
	'Menuitems'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'Создать элемент меню', 'url'=>array('create')),
	array('label'=>'Управление элементами меню', 'url'=>array('admin')),
);
?>

<h1>Редактировать элемент меню #<?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>