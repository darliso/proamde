<?php
/* @var $this PeriodoController */
/* @var $model Periodo */
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
		<?php echo $form->label($model,'ano'); ?>
		<?php echo $form->textField($model,'ano'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fechado'); ?>
		<?php echo $form->checkBox($model,'fechado'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'inicio_inscricao'); ?>
		<?php echo $form->textField($model,'inicio_inscricao'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fim_inscricao'); ?>
		<?php echo $form->textField($model,'fim_inscricao'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'polo_id'); ?>
		<?php echo $form->textField($model,'polo_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->