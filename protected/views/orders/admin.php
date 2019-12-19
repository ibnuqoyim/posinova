<?php
/* @var $this OrdersController */
/* @var $model Orders */

$this->breadcrumbs=array(
	'Orders'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Orders', 'url'=>array('index')),
	array('label'=>'Create Orders', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#orders-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Orders</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'orders-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id_orders',
		'nama_petugas',
		'tgl_order',
		'jam_order',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
