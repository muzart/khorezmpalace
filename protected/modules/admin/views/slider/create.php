<?php
/* @var $this SliderController */
/* @var $model Slider */

$this->menu=array(
	array('label'=>'Управление слайдером', 'url'=>array('admin')),
);
?>

<h1>Создать элемент слайдера</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>