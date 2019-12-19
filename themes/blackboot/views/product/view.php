<?php
/* @var $this ProductController */
/* @var $model Product */

$this->breadcrumbs=array(
	'Products'=>array('index'),
	$model->product_id,
);


?>
<div class="container">
<h1><?php echo $model->product_name; ?></h1>



	<div class="detail-produk">
            <img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/product/<?php	echo $model->product_images; ?>" alt="<?php	echo $model->product_name; ?>">
 
            
            <h5>Rp 150.000,-</h5><?php echo CHtml::link('Beli', array('/orders/create/'.$model->product_id),array('class'=>'tombol tombol-beli')); ?>
 
            
            
    </div>
 </div> 

