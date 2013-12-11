<?php
/* @var $this PeriodoController */
/* @var $model Periodo */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'periodo-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'ano'); ?>
		<?php echo $form->textField($model,'ano'); ?>
		<?php echo $form->error($model,'ano'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fechado'); ?>
		<?php echo $form->checkBox($model,'fechado'); ?>
		<?php echo $form->error($model,'fechado'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'inicio_inscricao'); ?>
		<?php echo $form->textField($model,'inicio_inscricao'); ?>
		<?php echo $form->error($model,'inicio_inscricao'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fim_inscricao'); ?>
		<?php echo $form->textField($model,'fim_inscricao'); ?>
		<?php echo $form->error($model,'fim_inscricao'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'polo_id'); ?>
		<?php echo $form->textField($model,'polo_id'); ?>
		<?php echo $form->error($model,'polo_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->