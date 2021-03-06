<?php
/* @var $this RoomTypeController */
/* @var $model RoomType */

$this->menu=array(
	array('label'=>'Создать тип номера', 'url'=>array('create')),
	array('label'=>'Редактировать', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Удалить', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Вы уверены?')),
	array('label'=>'Управление типами номеров', 'url'=>array('admin')),
);
?>

<h1>Просмотр типа номера #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'img',
		array(
			'name'=>'img',
			'value'=>CHtml::image(Yii::app()->baseUrl.RoomType::IMAGE_FOLDER.$model->img,'',array('width'=>'300')),
			'type'=>'html'
		),
		'lang_id',
		'hash',
	),
)); ?>
