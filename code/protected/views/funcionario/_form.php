<?php
/* @var $this FuncionarioController */
/* @var $model Funcionario */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'funcionario-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'pessoa_id'); ?>
		<?php echo $form->textField($model,'pessoa_id'); ?>
		<?php echo $form->error($model,'pessoa_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'polo_id'); ?>
		<?php echo $form->textField($model,'polo_id'); ?>
		<?php echo $form->error($model,'polo_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pis_pasep'); ?>
		<?php echo $form->textField($model,'pis_pasep',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'pis_pasep'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tipo'); ?>
		<?php echo $form->textField($model,'tipo',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'tipo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'horario'); ?>
		<?php echo $form->textField($model,'horario',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'horario'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'curso_formacao'); ?>
		<?php echo $form->textField($model,'curso_formacao',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'curso_formacao'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'instituicao_ensino'); ?>
		<?php echo $form->textField($model,'instituicao_ensino',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'instituicao_ensino'); ?>
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