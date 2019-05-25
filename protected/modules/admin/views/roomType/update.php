<?php
/* @var $this RoomTypeController */
/* @var $model RoomType */

$this->menu=array(
	array('label'=>'Создать тип номера', 'url'=>array('create')),
	array('label'=>'Просмотр', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Управление типами номеров', 'url'=>array('admin')),
);
?>

<h1>Редактировать тип номера <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>