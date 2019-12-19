<?php
/* @var $this UserController */
/* @var $model User */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'user-form',
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
				<?php echo $form->labelEx($model,'username'); ?>
				<?php echo $form->textField($model,'username',array('class'=>'form-control'),array('size'=>60,'maxlength'=>255)); ?>
				<?php echo $form->error($model,'username'); ?>
			</div>

			<div class="form-group">
				<?php echo $form->labelEx($model,'fullname'); ?>
				<?php echo $form->textField($model,'fullname',array('class'=>'form-control'),array('size'=>40,'maxlength'=>40)); ?>
				<?php echo $form->error($model,'fullname'); ?>
			</div>

			<div class="form-group">
				<?php echo $form->labelEx($model,'password'); ?>
				<?php echo $form->passwordField($model,'password',array('class'=>'form-control'),array('size'=>60,'maxlength'=>250)); ?>
				<?php echo $form->error($model,'password'); ?>
			</div>

			<div class="form-group">
				<?php echo $form->labelEx($model,'user_level'); ?>
				<?php echo $form->textField($model,'user_level',array('class'=>'form-control'),array('size'=>60,'maxlength'=>200)); ?>
				<?php echo $form->error($model,'user_level'); ?>
			</div>


			<div class="form-group">
				<?php echo $form->labelEx($model,'user_status'); ?>
				<?php echo $form->textField($model,'user_status',array('class'=>'form-control'),array('size'=>1,'maxlength'=>1)); ?>
				<?php echo $form->error($model,'user_status'); ?>
			</div>
		</div>
	</div>
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->