<?php
/* @var $this MenuitemController */
/* @var $model Menuitem */


$this->menu=array(
	array('label'=>'Новый элемент меню', 'url'=>array('create')),
);

?>

<h1>Управление элементами меню</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'menuitem-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'menu_id',
		'title',
		array(
			'name'=>'parent_id',
			'value'=>'($data->parent_id != 0) ? $data->parent->title : ""'
		),
		'url',
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
