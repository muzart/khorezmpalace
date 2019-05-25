<?php
/* @var $this ContentController */
/* @var $model Content */

$this->menu=array(
	array('label'=>'Новый контент', 'url'=>array('create')),
);

?>

<h1>Управление контентом</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'content-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'hash',
		array(
			'name'=>'lang_id',
			'value'=>'$data->lang->lang'
		),
		array(
			'name'=>'category_id',
			'value'=>'$data->category->title'
		),
		'title',
//		'description',
		'meta_tags',
		/*
		'meta_description',
		'created',
		'updated',
		'created_by',
		'image',
		*/
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
