<?php
/* @var $this ServicesController */
/* @var $model Services */

$this->menu=array(
	array('label'=>'Управление сервисами', 'url'=>array('admin')),
);
?>

<h1>Создать сервис</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>