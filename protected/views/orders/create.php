<?php
/* @var $this OrdersController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Orders',
);

$this->menu=array(
	array('label'=>'Create Orders', 'url'=>array('create')),
	array('label'=>'Manage Orders', 'url'=>array('admin')),
);
?>
<?php if ($model <> '') {?>	
<div class="row col-lg-8 form-group">
	<div>    .</div>
    <?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'orders-detail-form',
	'enableAjaxValidation'=>false,
)); ?>

	<?php echo $form->errorSummary($modelDetail); ?>
	<div class="col-lg-12">
		<div class="col-lg-6">
			<div class="form-group">
				<?php echo $form->hiddenField($modelDetail,'id_orders',array('class'=>'form-control','value'=>$model->id_orders)); ?>
				<?php echo $form->error($modelDetail,'id_orders'); ?>
				<?php echo $form->textField($modelDetail,'product_id',array('class'=>'form-control','placeholder'=>"Scan [B]arcode / Input nama")); ?>
				<?php echo $form->error($modelDetail,'product_id'); ?>
			</div>

		</div>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($modelDetail->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>
    <br>
</div>
<div class="col-lg-12">
	
	<h1>Orders # <?php echo $model->id_orders; ?></h1>

		<table class="table">
		  <thead>
		    <tr>
		      <th scope="col">#</th>
		      <th scope="col">Produk</th>
		      <th scope="col">Qty</th>
		      <th scope="col">Price</th>
		      <th scope="col">Sub Total</th>
		    </tr>
		  </thead>
		  <tbody>

		  <?php 
		  if ($detail <> null){
		  foreach ($detail as $produk) { ?>
		    <tr>
		      <th scope="row"><?php echo $produk->id_orders ?></th>
		      <td><?php echo $produk->produk->product_name ?></td>
		      <td><?php echo $produk->jumlah ?></td>
		      <td><?php echo $produk->produk->product_price ?></td>
		      <td><?php echo ($produk->produk->product_price * $produk->jumlah) ?></td>
		    </tr>
		   <?php } 
		}else{
			echo "";
		}?>
		  </tbody>
		</table>
	<?php } ?>
</div>

