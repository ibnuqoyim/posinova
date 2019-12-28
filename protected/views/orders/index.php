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
				<?php echo $form->textField($model,'id_orders',array('class'=>'form-control')); ?>
				<?php echo $form->error($model,'id_orders'); ?>
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

		<?php /*$this->widget('zii.widgets.CListView', array(
			'detail'=>$dataProvider,
			'itemView'=>'_view',
		)); */?>
	<?php } ?>
</div>

