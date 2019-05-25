<?php
/* @var $this LanguagesController */
/* @var $model Languages */

$this->breadcrumbs=array(
	'Languages'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Languages', 'url'=>array('index')),
	array('label'=>'Manage Languages', 'url'=>array('admin')),
);
?>

<h1>Create Languages</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>