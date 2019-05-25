<?php
/* @var $this SliderController */
/* @var $model Slider */

$this->menu=array(
	array('label'=>'Создать элемент слайдера', 'url'=>array('create')),
	array('label'=>'Просмотр элемента', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Управление слайдером', 'url'=>array('admin')),
);
?>

<h1>Редактировать элемент слайдера <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>