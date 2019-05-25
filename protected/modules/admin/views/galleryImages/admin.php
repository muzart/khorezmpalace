<?php
/* @var $this GalleryImagesController */
/* @var $model GalleryImages */

$this->menu=array(
	array('label'=>'Новая картинка', 'url'=>array('create')),
);

?>

<h1>Управление картинками</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'gallery-images-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
//		'gallery_id',
		array(
			'name'=>'gallery_id',
			'value'=>'$data->gallery->title_ru'
		),
		array(
			'name'=>'image',
			'value'=>'CHtml::image(Yii::app()->baseUrl.GalleryImages::IMAGE_FOLDER.$data->image,"",array("width"=>"70"))',
			'type'=>'html'
		),
		'description_uz',
		'description_ru',
		'description_en',
		array(
			'class' => 'zii.widgets.grid.CButtonColumn',
			'htmlOptions' => array('style' => 'white-space: nowrap'),
			'afterDelete' => 'function(link,success,data) { if (success && data) alert(data); }',
			// 'template' => '{plus} {view} {update} {delete}',
			'buttons' => array(
				'view' => array(
					'options' => array( 'title' => Yii::t('app', 'Ko\'rish')),
					'imageUrl' => '/images/view.png',
				),
				'update' => array(
					'options' => array( 'title' => Yii::t('app', 'Tahrirlash')),
					'imageUrl' => '/images/update.png',
				),
				'delete' => array(
					'options' => array('title' => Yii::t('app', 'O\'chirish')),
					'imageUrl' => '/images/delete.png',
				)
			)
		),
	),
)); ?>
