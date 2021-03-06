<?php
/* @var $this TurmaController */
/* @var $model Turma */
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
		<?php echo $form->label($model,'classe_id'); ?>
		<?php echo $form->textField($model,'classe_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'periodo_id'); ?>
		<?php echo $form->textField($model,'periodo_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nome'); ?>
		<?php echo $form->textField($model,'nome',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'vagas'); ?>
		<?php echo $form->textField($model,'vagas'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'unica'); ?>
		<?php echo $form->checkBox($model,'unica'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->