<?php
/* @var $this SliderController */
/* @var $model Slider */


$this->menu=array(
	array('label'=>'Создать элемент слайдера', 'url'=>array('create')),
);

?>

<h1>Управление картинками слайдера</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'slider-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		array(
			'name'=>'img',
			'value'=>'CHtml::image(Yii::app()->baseUrl.Slider::IMAGE_FOLDER.$data->img,"",array("width"=>"200"))',
			'type'=>'html'
		),
		'title',
		'lang_id',
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
