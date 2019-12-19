<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>
<div class="badan">
 <h2>Produk Baru</h2>;
<?php foreach ($model as $produk) { ?>

	<div class="list-produk">
            <img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/product/<?php	echo $produk->product_images; ?>" alt="<?php	echo $produk->product_name; ?>">
 
            <h4><?php	echo $produk->product_name; ?></h4>
            <h5>Rp 150.000,-</h5>
 
            <?php echo CHtml::link('Detail', array('/product/view/'.$produk->product_id),array('class'=>'tombol tombol-detail')); ?>
            <?php echo CHtml::link('Beli', array('/orders/create'),array('class'=>'tombol tombol-beli')); ?>
        </div>
    
	<?php
} ?>
</div>

