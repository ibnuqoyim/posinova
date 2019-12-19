<?php
/* @var $this OrdersDetailController */
/* @var $model OrdersDetail */

$this->breadcrumbs=array(
	'Orders Details'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List OrdersDetail', 'url'=>array('index')),
	array('label'=>'Create OrdersDetail', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#orders-detail-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'orders-detail-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'id_orders',
		'product_id',
		'jumlah',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
