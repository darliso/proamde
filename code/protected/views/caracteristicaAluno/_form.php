<?php
/* @var $this CaracteristicaAlunoController */
/* @var $model CaracteristicaAluno */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'caracteristica-aluno-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'aluno_id'); ?>
		<?php echo $form->textField($model,'aluno_id'); ?>
		<?php echo $form->error($model,'aluno_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'caracteristica_id'); ?>
		<?php echo $form->textField($model,'caracteristica_id'); ?>
		<?php echo $form->error($model,'caracteristica_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'observacao'); ?>
		<?php echo $form->textField($model,'observacao',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'observacao'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->