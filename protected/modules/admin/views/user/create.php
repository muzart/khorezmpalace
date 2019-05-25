<?php
/* @var $this UserController */
/* @var $model User */


$this->menu=array(
	array('label'=>'Управление пользователями', 'url'=>array('admin')),
);
?>

<h1>Создать пользователь</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>