<?php
/* @var $this MenuController */
/* @var $model Menu */

$this->breadcrumbs=array(
	'Menus'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Управление меню', 'url'=>array('admin')),
);
?>

<h1>Создать меню</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>