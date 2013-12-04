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

	<p class="note">Campos com <span class="required">*</span> são obrigatórios.</p>

	<?php echo $form->errorSummary($model, $model->pessoa); ?>
        
	<div class="row">
            <div class="column">
		<?php echo $form->labelEx($model->pessoa,'nome'); ?>
		<?php echo $form->textField($model->pessoa,'nome',array('size'=>50,'maxlength'=>250)); ?>
		<?php echo $form->error($model->pessoa,'nome'); ?>
            </div>
            <div class="column">
		<?php echo $form->labelEx($model->pessoa,'email'); ?>
		<?php echo $form->textField($model->pessoa,'email',array('size'=>50,'maxlength'=>250)); ?>
		<?php echo $form->error($model->pessoa,'email'); ?>
            </div>
	</div>
        
	<div class="row">
            <div class="column">
		<?php echo $form->labelEx($model->pessoa,'cpf'); ?>
		<?php echo $form->textField($model->pessoa,'cpf'); ?>
		<?php echo $form->error($model->pessoa,'cpf'); ?>
            </div>
            <div class="column">
                <?php echo $form->labelEx($model->pessoa,'rg'); ?>
		<?php echo $form->textField($model->pessoa,'rg'); ?>
		<?php echo $form->error($model->pessoa,'rg'); ?>
            </div>
            <div class="column">
                <?php echo $form->labelEx($model->pessoa,'data_de_nascimento'); ?>
		<?php echo $form->textField($model->pessoa,'data_de_nascimento',array('maxlength'=>8)); ?>
		<?php echo $form->error($model->pessoa,'data_de_nascimento'); ?>
            </div>
            <div class="column">
                <?php echo $form->labelEx($model->pessoa,'genero'); ?>
		<?php echo CHtml::dropDownList('genero', $model->pessoa, 
              array('M' => ' Masculino ', 'F' => ' Feminino ')); ?>
            </div>
	</div>

        <div class="row">
            <div class="column">
                <?php echo $form->labelEx($model->pessoa,'naturalidade'); ?>
		<?php echo $form->textField($model->pessoa,'naturalidade',array('size'=>50,'maxlength'=>45)); ?>
		<?php echo $form->error($model->pessoa,'naturalidade'); ?>
            </div>
            <div class="column">
                <?php echo $form->labelEx($model->pessoa,'endereco'); ?>
		<?php echo $form->textField($model->pessoa,'endereco',array('size'=>50,'maxlength'=>250)); ?>
		<?php echo $form->error($model->pessoa,'endereco'); ?>
            </div>
        </div>
        
        <div class="row">   
            <div class="column">
		<?php echo $form->labelEx($model,'bairro'); ?>
		<?php echo $form->textField($model,'bairro',array('size'=>20,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'bairro'); ?>
            </div>

            <div class="column">
		<?php echo $form->labelEx($model,'zona'); ?>
		<?php echo CHtml::dropDownList('zona', $model, 
              Aluno::$zonas); ?>
            </div>
            <div class="column">
		<?php echo $form->labelEx($model,'ponto_referencia'); ?>
		<?php echo $form->textField($model,'ponto_referencia',array('size'=>61,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'ponto_referencia'); ?>
            </div>
        </div>
        
        <div class="row">
            <div class="column">
                <?php echo $form->labelEx($model->pessoa,'uf'); ?>
		<?php echo $form->textField($model->pessoa,'uf',array('size'=>26,'maxlength'=>45)); ?>
		<?php echo $form->error($model->pessoa,'uf'); ?>
            </div>
            
            <div class="column">
                <?php echo $form->labelEx($model->pessoa,'cep'); ?>
		<?php echo $form->textField($model->pessoa,'cep') ?>
		<?php echo $form->error($model->pessoa,'cep'); ?>
            </div>
            
            <div class="column">
                <?php echo $form->labelEx($model->pessoa,'telefone'); ?>
		<?php echo $form->textField($model->pessoa,'telefone',array('maxlength'=>20)); ?>
		<?php echo $form->error($model->pessoa,'telefone'); ?>
            </div> 
            
            <div class="column">
                <?php echo $form->labelEx($model->pessoa,'celular'); ?>
		<?php echo $form->textField($model->pessoa,'celular',array('maxlength'=>20)); ?>
		<?php echo $form->error($model->pessoa,'celular'); ?>
            </div> 
            
            <div class="column">
                <?php echo $form->labelEx($model->pessoa,'escolaridade'); ?>
		<?php echo CHtml::dropDownList('escolaridade', $model->pessoa, 
              Pessoa::$escolaridades); ?>
            </div>  
            
            <div class="column">
		<?php echo $form->labelEx($model,'situacao_escolar'); ?>
		<?php echo CHtml::dropDownList('situacao_escolar', $model, 
              Aluno::$situacoes_escolares); ?>
            </div>
            
            <div class="column">
                <?php echo $form->labelEx($model->pessoa,'rede_ensino'); ?>
		<?php echo  CHtml::dropDownList('rede_ensino', $model->pessoa, 
              Pessoa::$redes_ensino); ?>
            </div>
            
            <div class="column">
		<?php echo $form->labelEx($model,'renda_familiar'); ?>
		<?php echo $form->textField($model,'renda_familiar',array('size'=>24,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'renda_familiar'); ?>
            </div>
            
            <div class="column">
		<?php echo $form->labelEx($model,'nome_pai'); ?>
		<?php echo $form->textField($model,'nome_pai',array('size'=>50,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'nome_pai'); ?>
            </div>

            <div class="column">
		<?php echo $form->labelEx($model,'nome_mae'); ?>
		<?php echo $form->textField($model,'nome_mae',array('size'=>50,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'nome_mae'); ?>
            </div>
        </div>
         
	<div class="row">
            <div class="column">
		<?php echo $form->labelEx($model,'certidao_numero'); ?>
		<?php echo $form->textField($model,'certidao_numero',array('size'=>22,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'certidao_numero'); ?>
            </div>
            <div class="column">
		<?php echo $form->labelEx($model,'certidao_folha'); ?>
		<?php echo $form->textField($model,'certidao_folha',array('size'=>22,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'certidao_folha'); ?>
            </div>	
            <div class="column">
		<?php echo $form->labelEx($model,'certidao_livro'); ?>
		<?php echo $form->textField($model,'certidao_livro',array('size'=>21,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'certidao_livro'); ?>
            </div>
            <div class="column">
		<?php echo $form->labelEx($model,'certidao_cartorio'); ?>
		<?php echo $form->textField($model,'certidao_cartorio',array('size'=>21,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'certidao_cartorio'); ?>
            </div>
	</div>

	<div class="row">
            <div class="column">
		<?php echo $form->labelEx($model,'tipo_sanguineo'); ?>
		<?php echo  CHtml::dropDownList('tipo_sanguineo', $model, 
              Aluno::$tipos_sanguineos); ?>
            </div>	
            <div class="column">
		<?php echo $form->labelEx($model,'estado_civil'); ?>
		<?php echo CHtml::dropDownList('estado_civil', $model, 
              Aluno::$estados_civis); ?>
            </div>
            <div class="column">
		<?php echo $form->labelEx($model,'profissao'); ?>
		<?php echo CHtml::dropDownList('profissao', $model, 
              Aluno::$profissoes); ?>
            </div>
            <div class="column">
		<?php echo $form->labelEx($model,'ocupacao_imovel'); ?>
		<?php echo CHtml::dropDownList('ocupacao_imovel', $model, 
              Aluno::$ocupacoes_imovel); ?>
            </div>
            
            <div class="column">
		<?php echo $form->labelEx($model,'tipo_habitacao'); ?>
		<?php echo CHtml::dropDownList('tipo_habitacao', $model, 
              Aluno::$tipos_habitacao); ?>
            </div>
            
            <div class="column">
		<?php echo $form->labelEx($model,'hidraulica'); ?>
		<?php echo CHtml::dropDownList('hidraulica', $model, 
              Aluno::$instalacoes_hidraulicas); ?>
            </div>
            <div class="column">
		<?php echo $form->labelEx($model,'eletrica'); ?>
		<?php echo CHtml::dropDownList('eletrica', $model, 
              Aluno::$instalacoes_eletricas); ?>
            </div>
            
            <div class="column">
		<?php echo $form->labelEx($model,'telefone_pai'); ?>
		<?php echo $form->textField($model,'telefone_pai',array('size'=>24,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'telefone_pai'); ?>
            </div>
            	<div class="column">
		<?php echo $form->labelEx($model,'telefone_mae'); ?>
		<?php echo $form->textField($model,'telefone_mae',array('size'=>23,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'telefone_mae'); ?>
            </div>
            <div class="column">
		<?php echo $form->labelEx($model,'nome_escola'); ?>
		<?php echo $form->textField($model,'nome_escola',array('size'=>50,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'nome_escola'); ?>
            </div>

            <div class="column">
		<?php echo $form->labelEx($model,'zona_escola'); ?>
		<?php echo $form->textField($model,'zona_escola',array('size'=>50,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'zona_escola'); ?>
            </div>
            
            <div class="column">
		<?php echo $form->labelEx($model,'inicio_deficiencia'); ?>
		<?php echo $form->textField($model,'inicio_deficiencia',array('size'=>20,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'inicio_deficiencia'); ?>
            </div>

            <div class="column">
		<?php echo $form->labelEx($model,'observacao'); ?>
		<?php echo $form->textField($model,'observacao',array('size'=>70,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'observacao'); ?>
            </div>
            
            <div class="column">
		<?php echo $form->labelEx($model,'foto'); ?>
		<?php echo $form->textField($model,'foto',array('size'=>88,'maxlength'=>250)); ?>
                <?php echo CHtml::button('  Obter Arquivo  ', array('size'=>13)); ?>
		<?php echo $form->error($model,'foto'); ?>
            </div>
	</div>
        
        <div class="row buttons">
            <div class="column">
		<?php echo CHtml::submitButton($model->isNewRecord ? '  Cadastrar  ' : '   Salvar   ', array('size'=>13)); ?>
            </div>
        </div>

<?php $this->endWidget(); ?>

</div><!-- form -->