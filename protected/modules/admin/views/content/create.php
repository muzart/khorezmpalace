<?php
/* @var $this ContentController */
/* @var $model Content */

$this->breadcrumbs=array(
	'Contents'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Управление контентом', 'url'=>array('admin')),
);
?>

<h1>Создать контент</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>