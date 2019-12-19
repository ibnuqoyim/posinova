<?php
/* @var $this CartController */
/* @var $model Cart */

$this->breadcrumbs=array(
	'Carts'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Cart', 'url'=>array('index')),
	array('label'=>'Create Cart', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#cart-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Carts</h1>


<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'cart-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'cart_id',
		'cart_session',
		'cart_date',
		'cart_qty',
		'product_id',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
