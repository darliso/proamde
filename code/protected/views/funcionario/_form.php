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

	<p class="note">Campos com <span class="required">*</span> são obrigatórios.</p>

	<?php echo $form->errorSummary($model, $pessoa); ?>

        <div class="row">
                <?php echo $form->labelEx($pessoa,'nome'); ?>
		<?php echo $form->textField($pessoa,'nome',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($pessoa,'nome'); ?>
        </div>
        
        <div class="row">
                <?php echo $form->labelEx($pessoa,'email'); ?>
		<?php echo $form->textField($pessoa,'email',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($pessoa,'email'); ?>
        </div>
        
        <div class="row">
                <?php echo $form->labelEx($pessoa,'cpf'); ?>
		<?php echo $form->textField($pessoa,'cpf'); ?>
		<?php echo $form->error($pessoa,'cpf'); ?>
        </div>
        
        <div class="row">
                <?php echo $form->labelEx($pessoa,'rg'); ?>
		<?php echo $form->textField($pessoa,'rg'); ?>
		<?php echo $form->error($pessoa,'rg'); ?>
        </div>
        
                
        <div class="row">
                <?php echo $form->labelEx($pessoa,'data_de_nascimento'); ?>
		<?php echo $form->textField($pessoa,'data_de_nascimento',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($pessoa,'data_de_nascimento'); ?>
        </div>
        
        <div class="row">
                <?php echo $form->labelEx($pessoa,'genero'); ?>
		<?php echo $form->textField($pessoa,'genero',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($pessoa,'genero'); ?>
        </div>
        
        <div class="row">
                <?php echo $form->labelEx($pessoa,'naturalidade'); ?>
		<?php echo $form->textField($pessoa,'naturalidade',array('size'=>60,'maxlength'=>45)); ?>
		<?php echo $form->error($pessoa,'naturalidade'); ?>
        </div>
        
        <div class="row">
                <?php echo $form->labelEx($pessoa,'endereco'); ?>
		<?php echo $form->textField($pessoa,'endereco',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($pessoa,'endereco'); ?>
        </div>
            
        <div class="row">
                <?php echo $form->labelEx($pessoa,'cep'); ?>
		<?php echo $form->textField($pessoa,'cep') ?>
		<?php echo $form->error($pessoa,'cep'); ?>
        </div>
         
        <div class="row">
                <?php echo $form->labelEx($pessoa,'telefone'); ?>
		<?php echo $form->textField($pessoa,'telefone',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($pessoa,'telefone'); ?>
        </div>    

        <div class="row">
                <?php echo $form->labelEx($pessoa,'celular'); ?>
		<?php echo $form->textField($pessoa,'celular',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($pessoa,'celular'); ?>
        </div>   
        
        <div class="row">
                <?php echo $form->labelEx($pessoa,'escolaridade'); ?>
		<?php echo $form->textField($pessoa,'escolaridade',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($pessoa,'escolaridade'); ?>
        </div>  
        
        <div class="row">
                <?php echo $form->labelEx($pessoa,'rede_ensino'); ?>
		<?php echo $form->textField($pessoa,'rede_ensino',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($pessoa,'rede_ensino'); ?>
        </div>
            
	<div class="row">
		<?php echo $form->labelEx($model,'pis_pasep'); ?>
		<?php echo $form->textField($model,'pis_pasep',array('size'=>30,'maxlength'=>25)); ?>
		<?php echo $form->error($model,'pis_pasep'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tipo'); ?>
		<?php echo $form->textField($model,'tipo',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'tipo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'horario'); ?>
		<?php echo $form->textField($model,'horario',array('size'=>10,'maxlength'=>4)); ?>
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
		<?php echo $form->textArea($model,'observacao',array('lines'=>3,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'observacao'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Cadastrar' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->