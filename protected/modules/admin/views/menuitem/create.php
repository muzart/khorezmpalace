<?php
/* @var $this MenuitemController */
/* @var $model Menuitem */

$this->breadcrumbs=array(
	'Menuitems'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Menuitem', 'url'=>array('index')),
	array('label'=>'Manage Menuitem', 'url'=>array('admin')),
);
?>

<h1>Create Menuitem</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>