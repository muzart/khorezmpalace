<?php
/* @var $this SliderController */
/* @var $model Slider */

$this->menu=array(
	array('label'=>'Создать элемент слайдера', 'url'=>array('create')),
	array('label'=>'Редактировать', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Удалить', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Вы уверены?')),
	array('label'=>'Управление слайдером', 'url'=>array('admin')),
);
?>

<h1>Просмотр элемента слайдера #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		array(
			'name'=>'img',
			'value'=>CHtml::image(Slider::IMAGE_FOLDER.$model->img,'',array('width'=>'500px')),
			'type'=>'html'
		),
		'title',
		'lang_id',
	),
)); ?>
