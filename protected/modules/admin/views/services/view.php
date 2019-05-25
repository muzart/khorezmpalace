<?php
/* @var $this ServicesController */
/* @var $model Services */

$this->breadcrumbs=array(
	'Services'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'Создать сервис', 'url'=>array('create')),
	array('label'=>'Редактировать', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Удалить', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Вы уверены?')),
	array('label'=>'Управление сервисами', 'url'=>array('admin')),
);
?>

<h1>Просмотр сервиса #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'lang_id',
		'cost',
		array(
			'name'=>'img',
			'value'=>CHtml::image(Yii::app()->baseUrl.Services::IMAGE_FOLDER.$model->img,'',array('width'=>'300')),
			'type'=>'html'
		),
		'title',
		'description',
	),
)); ?>
