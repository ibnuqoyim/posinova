<?php
/* @var $this ProductController */
/* @var $model Product */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'product-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>
	<div class="col-lg-12">
		<div class="col-lg-6">
			<div class="form-group">
				<?php echo $form->labelEx($model,'product_name'); ?>
				<?php echo $form->textField($model,'product_name',array('class'=>'form-control'),array('size'=>60,'maxlength'=>100)); ?>
				<?php echo $form->error($model,'product_name'); ?>
			</div>

			<div class="form-group">
				<?php echo $form->labelEx($model,'category_id'); ?>
				<?php echo $form->textField($model,'category_id',array('class'=>'form-control')); ?>
				<?php echo $form->error($model,'category_id'); ?>
			</div>

			<div class="form-group">
				<?php echo $form->labelEx($model,'product_price'); ?>
				<?php echo $form->textField($model,'product_price',array('class'=>'form-control')); ?>
				<?php echo $form->error($model,'product_price'); ?>
			</div>
		</div>
		<div class="col-lg-6">
			<div class="form-group">
				<?php echo $form->labelEx($model,'product_desc'); ?>
				<?php echo $form->textArea($model,'product_desc',array('class'=>'form-control'),array('rows'=>6, 'cols'=>50)); ?>
				<?php echo $form->error($model,'product_desc'); ?>
			</div>

			<div class="form-group">
				<?php echo $form->labelEx($model,'product_images'); ?>
				<?php echo $form->textArea($model,'product_images',array('class'=>'form-control'),array('rows'=>6, 'cols'=>50)); ?>
				<?php echo $form->error($model,'product_images'); ?>
			</div>

			<div class="form-group">
				<?php echo $form->labelEx($model,'product_stock'); ?>
				<?php echo $form->textField($model,'product_stock',array('class'=>'form-control')); ?>
				<?php echo $form->error($model,'product_stock'); ?>
			</div>
		</div>
</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->