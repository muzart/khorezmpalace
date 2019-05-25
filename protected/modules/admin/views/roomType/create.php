<?php
/* @var $this RoomTypeController */
/* @var $model RoomType */

$this->menu=array(
	array('label'=>'Управление типами номеров', 'url'=>array('admin')),
);
?>

<h1>Создать тип номера</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>