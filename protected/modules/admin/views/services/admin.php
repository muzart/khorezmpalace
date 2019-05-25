<?php
/* @var $this ServicesController */
/* @var $model Services */

$this->menu=array(
	array('label'=>'Новый сервис', 'url'=>array('create')),
);

?>

<h1>Управление сервисами</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'services-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'lang_id',
		'img',
		array(
			'name'=>'img',
			'value'=>'CHtml::image(Yii::app()->baseUrl.Services::IMAGE_FOLDER.$data->img,"",array("width"=>"100"))',
			'type'=>'html'
		),
		'title',
		'description',
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
