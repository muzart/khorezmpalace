<?php
/* @var $this CategoryController */
/* @var $model Category */


$this->menu=array(
	array('label'=>'Создать категорию', 'url'=>array('create')),
);
?>

<h1>Управление категориями</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'category-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'hash',
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
