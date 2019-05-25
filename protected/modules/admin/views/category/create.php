<?php
/* @var $this CategoryController */
/* @var $model Category */


$this->menu=array(
	array('label'=>'Управление категориями', 'url'=>array('admin')),
);
?>

<h1>Создать каиегорию</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>