<?php
/* @var $this GalleryImagesController */
/* @var $model GalleryImages */

$this->breadcrumbs=array(
	'Gallery Images'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List GalleryImages', 'url'=>array('index')),
	array('label'=>'Manage GalleryImages', 'url'=>array('admin')),
);
?>

<h1>Create GalleryImages</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>