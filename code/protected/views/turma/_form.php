<?php
/* @var $this TurmaController */
/* @var $model Turma */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'turma-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'classe_id'); ?>
		<?php echo $form->textField($model,'classe_id'); ?>
		<?php echo $form->error($model,'classe_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'polo_id'); ?>
		<?php echo $form->textField($model,'polo_id'); ?>
		<?php echo $form->error($model,'polo_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nome'); ?>
		<?php echo $form->textField($model,'nome',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'nome'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ano'); ?>
		<?php echo $form->textField($model,'ano'); ?>
		<?php echo $form->error($model,'ano'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'vagas'); ?>
		<?php echo $form->textField($model,'vagas'); ?>
		<?php echo $form->error($model,'vagas'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->