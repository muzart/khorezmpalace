<?php
/* @var $this GalleryImagesController */
/* @var $model GalleryImages */

$this->breadcrumbs=array(
	'Gallery Images'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List GalleryImages', 'url'=>array('index')),
	array('label'=>'Create GalleryImages', 'url'=>array('create')),
	array('label'=>'View GalleryImages', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage GalleryImages', 'url'=>array('admin')),
);
?>

<h1>Update GalleryImages <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>