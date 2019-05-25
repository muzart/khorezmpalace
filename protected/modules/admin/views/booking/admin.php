<?php
/* @var $this BookingController */
/* @var $model Booking */


$this->menu=array(
	array('label'=>'Отказанные', 'url'=>array('denied')),
	array('label'=>'Подтвержденные', 'url'=>array('confirmed')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#booking-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Заказы на бронирование</h1>

<span class="bg-orange"> Не отвечено </span> <br/>
<span class="bg-green"> Положительно отвечено </span> <br/>
<span class="bg-red"> Отрицательно отвечено </span>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'booking-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'rowCssClassExpression'=>'$data->replied == Booking::REPLY_CONFIRMED ? "bg-green" : ($data->replied == Booking::REPLY_DENIED ? "bg-red" : "bg-orange")',
	'columns'=>array(
		'id',
		'your_name',
		'email',
		'room_type',
		'rooms',
		'adults',
		'childs',
		'check_in',
		'check_in_time',
		'check_out',
		'check_out_time',
		array(
			'name'=>'created',
			'value'=>'date("H:i:s d-m-Y",$data->created)',
		),
		array(
			'class' => 'zii.widgets.grid.CButtonColumn',
			'htmlOptions' => array('style' => 'white-space: nowrap'),
			'afterDelete' => 'function(link,success,data) { if (success && data) alert(data); }',
			'template' => '{view} {delete}',
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
