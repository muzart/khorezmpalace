<?php
/* @var $this RoomTypeController */
/* @var $model RoomType */

$this->menu=array(
	array('label'=>'Создать тип номера', 'url'=>array('create')),
);

?>

<h1>Управление типами номеров</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'room-type-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'name',
		'img',
		array(
			'name'=>'img',
			'value'=>'CHtml::image(Yii::app()->baseUrl.RoomType::IMAGE_FOLDER.$data->img,"",array("width"=>"100"))',
			'type'=>'html'
		),
		'lang_id',
		'hash',
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
