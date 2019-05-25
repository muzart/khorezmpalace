<?php
/* @var $this MenuController */
/* @var $model Menu */

$this->menu=array(
	array('label'=>'Создать меню', 'url'=>array('create')),
	array('label'=>'Просмотр', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Управление меню', 'url'=>array('admin')),
);
?>

<h1>Редактировать меню <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>