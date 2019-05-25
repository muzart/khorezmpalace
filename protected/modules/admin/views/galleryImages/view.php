<?php
/* @var $this GalleryImagesController */
/* @var $model GalleryImages */

$this->menu=array(
	array('label'=>'Создать картинку', 'url'=>array('create')),
	array('label'=>'Редактировать', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Удалить', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Вы уверены?')),
	array('label'=>'Управление картинками', 'url'=>array('admin')),
);
?>

<h1>Просмотр картинки #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'gallery_id',
		'image',
		array(
			'name'=>'image',
			'value' => CHtml::image($model->getImageSrc(),'',array('width'=>'300')),
			'type' => 'html'
		),
		'description_uz',
		'description_ru',
		'description_en',
	),
)); ?>
