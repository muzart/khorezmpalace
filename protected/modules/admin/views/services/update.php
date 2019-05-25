<?php
/* @var $this ServicesController */
/* @var $model Services */



$this->menu=array(
	array('label'=>'Создать сервис', 'url'=>array('create')),
	array('label'=>'Просмотр', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Управление сервисами', 'url'=>array('admin')),
);
?>

<h1>Редактировать сервис <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>