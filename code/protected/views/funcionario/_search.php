<?php
/* @var $this FuncionarioController */
/* @var $model Funcionario */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pessoa_id'); ?>
		<?php echo $form->textField($model,'pessoa_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'polo_id'); ?>
		<?php echo $form->textField($model,'polo_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pis_pasep'); ?>
		<?php echo $form->textField($model,'pis_pasep',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tipo'); ?>
		<?php echo $form->textField($model,'tipo',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'horario'); ?>
		<?php echo $form->textField($model,'horario',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'curso_formacao'); ?>
		<?php echo $form->textField($model,'curso_formacao',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'instituicao_ensino'); ?>
		<?php echo $form->textField($model,'instituicao_ensino',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'observacao'); ?>
		<?php echo $form->textField($model,'observacao',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->