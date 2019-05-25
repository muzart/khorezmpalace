<?php
/* @var $this GalleryController */
/* @var $model Gallery */

$this->menu=array(
	array('label'=>'Управление галереями', 'url'=>array('admin')),
);
?>

<h1>Создать Галерею</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>