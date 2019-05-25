<?php
/* @var $this MenuitemController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Menuitems',
);

$this->menu=array(
	array('label'=>'Create Menuitem', 'url'=>array('create')),
	array('label'=>'Manage Menuitem', 'url'=>array('admin')),
);
?>

<h1>Menuitems</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
