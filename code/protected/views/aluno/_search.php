<?php
/* @var $this AlunoController */
/* @var $model Aluno */
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
		<?php echo $form->label($model,'responsavel_id'); ?>
		<?php echo $form->textField($model,'responsavel_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pessoa_id'); ?>
		<?php echo $form->textField($model,'pessoa_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'atendente_id'); ?>
		<?php echo $form->textField($model,'atendente_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'foto'); ?>
		<?php echo $form->textField($model,'foto',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'renda_familiar'); ?>
		<?php echo $form->textField($model,'renda_familiar'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nome_pai'); ?>
		<?php echo $form->textField($model,'nome_pai',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nome_mae'); ?>
		<?php echo $form->textField($model,'nome_mae',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'situacao_escolar'); ?>
		<?php echo $form->textField($model,'situacao_escolar',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'certidao_numero'); ?>
		<?php echo $form->textField($model,'certidao_numero',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'certidao_folha'); ?>
		<?php echo $form->textField($model,'certidao_folha',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'certidao_livro'); ?>
		<?php echo $form->textField($model,'certidao_livro',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'certidao_cartorio'); ?>
		<?php echo $form->textField($model,'certidao_cartorio',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tipo_sanguineo'); ?>
		<?php echo $form->textField($model,'tipo_sanguineo',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'estado_civil'); ?>
		<?php echo $form->textField($model,'estado_civil',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'profissao'); ?>
		<?php echo $form->textField($model,'profissao',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bairro'); ?>
		<?php echo $form->textField($model,'bairro',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'zona'); ?>
		<?php echo $form->textField($model,'zona',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ponto_referencia'); ?>
		<?php echo $form->textField($model,'ponto_referencia',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ocupacao_imovel'); ?>
		<?php echo $form->textField($model,'ocupacao_imovel',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tipo_habitacao'); ?>
		<?php echo $form->textField($model,'tipo_habitacao',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'hidraulica'); ?>
		<?php echo $form->textField($model,'hidraulica',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'eletrica'); ?>
		<?php echo $form->textField($model,'eletrica',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'telefone_pai'); ?>
		<?php echo $form->textField($model,'telefone_pai',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'telefone_mae'); ?>
		<?php echo $form->textField($model,'telefone_mae',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nome_escola'); ?>
		<?php echo $form->textField($model,'nome_escola',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'zona_escola'); ?>
		<?php echo $form->textField($model,'zona_escola',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'inicio_deficiencia'); ?>
		<?php echo $form->textField($model,'inicio_deficiencia'); ?>
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