<?php
/* @var $this LanguagesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Languages',
);

$this->menu=array(
	array('label'=>'Create Languages', 'url'=>array('create')),
	array('label'=>'Manage Languages', 'url'=>array('admin')),
);
?>

<h1>Languages</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
