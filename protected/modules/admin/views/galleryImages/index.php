<?php
/* @var $this GalleryImagesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Gallery Images',
);

$this->menu=array(
	array('label'=>'Create GalleryImages', 'url'=>array('create')),
	array('label'=>'Manage GalleryImages', 'url'=>array('admin')),
);
?>

<h1>Gallery Images</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
