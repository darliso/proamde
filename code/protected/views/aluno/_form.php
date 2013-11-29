<?php
/* @var $this AlunoController */
/* @var $model Aluno */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'aluno-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'responsavel_id'); ?>
		<?php echo $form->textField($model,'responsavel_id'); ?>
		<?php echo $form->error($model,'responsavel_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pessoa_id'); ?>
		<?php echo $form->textField($model,'pessoa_id'); ?>
		<?php echo $form->error($model,'pessoa_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'atendente_id'); ?>
		<?php echo $form->textField($model,'atendente_id'); ?>
		<?php echo $form->error($model,'atendente_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'foto'); ?>
		<?php echo $form->textField($model,'foto',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'foto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'renda_familiar'); ?>
		<?php echo $form->textField($model,'renda_familiar'); ?>
		<?php echo $form->error($model,'renda_familiar'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nome_pai'); ?>
		<?php echo $form->textField($model,'nome_pai',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'nome_pai'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nome_mae'); ?>
		<?php echo $form->textField($model,'nome_mae',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'nome_mae'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'situacao_escolar'); ?>
		<?php echo $form->textField($model,'situacao_escolar',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'situacao_escolar'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'certidao_numero'); ?>
		<?php echo $form->textField($model,'certidao_numero',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'certidao_numero'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'certidao_folha'); ?>
		<?php echo $form->textField($model,'certidao_folha',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'certidao_folha'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'certidao_livro'); ?>
		<?php echo $form->textField($model,'certidao_livro',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'certidao_livro'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'certidao_cartorio'); ?>
		<?php echo $form->textField($model,'certidao_cartorio',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'certidao_cartorio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tipo_sanguineo'); ?>
		<?php echo $form->textField($model,'tipo_sanguineo',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'tipo_sanguineo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'estado_civil'); ?>
		<?php echo $form->textField($model,'estado_civil',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'estado_civil'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'profissao'); ?>
		<?php echo $form->textField($model,'profissao',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'profissao'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bairro'); ?>
		<?php echo $form->textField($model,'bairro',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'bairro'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'zona'); ?>
		<?php echo $form->textField($model,'zona',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'zona'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ponto_referencia'); ?>
		<?php echo $form->textField($model,'ponto_referencia',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'ponto_referencia'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ocupacao_imovel'); ?>
		<?php echo $form->textField($model,'ocupacao_imovel',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'ocupacao_imovel'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tipo_habitacao'); ?>
		<?php echo $form->textField($model,'tipo_habitacao',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'tipo_habitacao'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'hidraulica'); ?>
		<?php echo $form->textField($model,'hidraulica',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'hidraulica'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'eletrica'); ?>
		<?php echo $form->textField($model,'eletrica',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'eletrica'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'telefone_pai'); ?>
		<?php echo $form->textField($model,'telefone_pai',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'telefone_pai'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'telefone_mae'); ?>
		<?php echo $form->textField($model,'telefone_mae',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'telefone_mae'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nome_escola'); ?>
		<?php echo $form->textField($model,'nome_escola',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'nome_escola'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'zona_escola'); ?>
		<?php echo $form->textField($model,'zona_escola',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'zona_escola'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'inicio_deficiencia'); ?>
		<?php echo $form->textField($model,'inicio_deficiencia'); ?>
		<?php echo $form->error($model,'inicio_deficiencia'); ?>
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