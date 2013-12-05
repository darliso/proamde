<?php
/* @var $this AlunoController */
/* @var $model Aluno */
/* @var $form CActiveForm */
?>

<div class="form">
    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'aluno-form',
        'enableAjaxValidation' => false,
        'enableClientValidation' => true
    ));
    ?>

    <p class="note">Campos com <span class="required">*</span> são obrigatórios.</p>

        <?php echo $form->errorSummary($model); ?>
        <?php echo $form->errorSummary($pessoa); ?>

    <div >
        <?php echo $form->labelEx($pessoa, 'nome'); ?>
        <?php echo $form->textField($pessoa, 'nome', array('size' => 50, 'maxlength' => 250)); ?>
        <?php echo $form->error($pessoa, 'nome'); ?>

    </div>
    <div >
        <?php echo $form->labelEx($pessoa, 'email'); ?>
        <?php echo $form->textField($pessoa, 'email', array('size' => 50, 'maxlength' => 250)); ?>
        <?php echo $form->error($pessoa, 'email'); ?>
    </div>


    <div >
        <?php echo $form->labelEx($pessoa, 'cpf'); ?>
        <?php echo $form->textField($pessoa, 'cpf'); ?>
        <?php echo $form->error($pessoa, 'cpf'); ?>
    </div>
    <div >
        <?php echo $form->labelEx($pessoa, 'rg'); ?>
        <?php echo $form->textField($pessoa, 'rg'); ?>
        <?php echo $form->error($pessoa, 'rg'); ?>
    </div>
    <div >
        <?php echo $form->labelEx($pessoa, 'data_de_nascimento'); ?>
        <?php echo $form->textField($pessoa, 'data_de_nascimento', array('maxlength' => 8)); ?>
        <?php echo $form->error($pessoa, 'data_de_nascimento'); ?>
    </div>
    <div >
        <?php echo $form->labelEx($pessoa, 'genero'); ?>
        <?php echo $form->dropDownList($pessoa, 'genero', array('Masculino', 'Feminino'), array('empty' => '')); ?>
    </div>


    <div >
        <?php echo $form->labelEx($pessoa, 'naturalidade'); ?>
        <?php echo $form->textField($pessoa, 'naturalidade', array('size' => 50, 'maxlength' => 45)); ?>
        <?php echo $form->error($pessoa, 'naturalidade'); ?>
    </div>
    <div >
        <?php echo $form->labelEx($pessoa, 'endereco'); ?>
        <?php echo $form->textField($pessoa, 'endereco', array('size' => 50, 'maxlength' => 250)); ?>
        <?php echo $form->error($pessoa, 'endereco'); ?>
    </div>


    <div >
        <?php echo $form->labelEx($model, 'bairro'); ?>
        <?php echo $form->textField($model, 'bairro', array('size' => 20, 'maxlength' => 250)); ?>
        <?php echo $form->error($model, 'bairro'); ?>
    </div>

    <div >
        <?php echo $form->labelEx($model, 'zona'); ?>
        <?php echo CHtml::dropDownList('zona', $model, Aluno::$zonas);?>
    </div>
    <div >
        <?php echo $form->labelEx($model, 'ponto_referencia'); ?>
        <?php echo $form->textField($model, 'ponto_referencia', array('size' => 61, 'maxlength' => 250)); ?>
        <?php echo $form->error($model, 'ponto_referencia'); ?>
    </div>
    <div >
        <?php echo $form->labelEx($pessoa, 'uf'); ?>
        <?php echo $form->textField($pessoa, 'uf', array('size' => 26, 'maxlength' => 45)); ?>
        <?php echo $form->error($pessoa, 'uf'); ?>
    </div>

    <div >
        <?php echo $form->labelEx($pessoa, 'cep'); ?>
        <?php echo $form->textField($pessoa, 'cep') ?>
        <?php echo $form->error($pessoa, 'cep'); ?>
    </div>

    <div >
        <?php echo $form->labelEx($pessoa, 'telefone'); ?>
        <?php echo $form->textField($pessoa, 'telefone', array('maxlength' => 20)); ?>
        <?php echo $form->error($pessoa, 'telefone'); ?>
    </div> 

    <div >
        <?php echo $form->labelEx($pessoa, 'celular'); ?>
        <?php echo $form->textField($pessoa, 'celular', array('maxlength' => 20)); ?>
        <?php echo $form->error($pessoa, 'celular'); ?>
    </div> 

    <div >
        <?php echo $form->labelEx($pessoa, 'escolaridade'); ?>
        <?php echo $form->dropDownList($pessoa, 'escolaridade', Pessoa::$escolaridades, array('empty' => '')); ?>
    </div>  

    <div >
        <?php echo $form->labelEx($model, 'situacao_escolar'); ?>
        <?php echo $form->dropDownList($model, 'situacao_escolar', Aluno::$situacoes_escolares, array('empty' => '')); ?>
    </div>

    <div >
        <?php echo $form->labelEx($pessoa, 'rede_ensino'); ?>
        <?php echo $form->dropDownList($pessoa, 'rede_ensino', Pessoa::$redes_ensino, array('empty' => '')); ?>
    </div>

    <div >
        <?php echo $form->labelEx($model, 'renda_familiar'); ?>
        <?php echo $form->textField($model, 'renda_familiar', array('size' => 24, 'maxlength' => 20)); ?>
        <?php echo $form->error($model, 'renda_familiar'); ?>
    </div>

    <div >
        <?php echo $form->labelEx($model, 'nome_pai'); ?>
        <?php echo $form->textField($model, 'nome_pai', array('size' => 50, 'maxlength' => 250)); ?>
        <?php echo $form->error($model, 'nome_pai'); ?>
    </div>

    <div >
        <?php echo $form->labelEx($model, 'nome_mae'); ?>
        <?php echo $form->textField($model, 'nome_mae', array('size' => 50, 'maxlength' => 250)); ?>
        <?php echo $form->error($model, 'nome_mae'); ?>
    </div>

    <div >
        <?php echo $form->labelEx($model, 'certidao_numero'); ?>
        <?php echo $form->textField($model, 'certidao_numero', array('size' => 22, 'maxlength' => 45)); ?>
        <?php echo $form->error($model, 'certidao_numero'); ?>
    </div>
    <div >
        <?php echo $form->labelEx($model, 'certidao_folha'); ?>
        <?php echo $form->textField($model, 'certidao_folha', array('size' => 22, 'maxlength' => 45)); ?>
        <?php echo $form->error($model, 'certidao_folha'); ?>
    </div>	
    <div >
        <?php echo $form->labelEx($model, 'certidao_livro'); ?>
        <?php echo $form->textField($model, 'certidao_livro', array('size' => 21, 'maxlength' => 45)); ?>
        <?php echo $form->error($model, 'certidao_livro'); ?>
    </div>
    <div >
        <?php echo $form->labelEx($model, 'certidao_cartorio'); ?>
        <?php echo $form->textField($model, 'certidao_cartorio', array('size' => 21, 'maxlength' => 45)); ?>
        <?php echo $form->error($model, 'certidao_cartorio'); ?>
    </div>

    <div >
        <?php echo $form->labelEx($model, 'tipo_sanguineo'); ?>
        <?php echo $form->dropDownList($model, 'tipo_sanguineo', Aluno::$tipos_sanguineos, array('empty' => '')); ?>
    </div>	
    <div >
        <?php echo $form->labelEx($model, 'estado_civil'); ?>
        <?php echo $form->dropDownList($model, 'estado_civil', Aluno::$estados_civis, array('empty' => '')); ?>
    </div>
    <div >
        <?php echo $form->labelEx($model, 'profissao'); ?>
        <?php echo $form->dropDownList($model, 'profissao', Aluno::$profissoes, array('empty' => '')); ?>
    </div>
    <div >
        <?php echo $form->labelEx($model, 'ocupacao_imovel'); ?>
        <?php echo $form->dropDownList($model, 'ocupacao_imovel', Aluno::$ocupacoes_imovel, array('empty' => '')); ?>
    </div>

    <div >
        <?php echo $form->labelEx($model, 'tipo_habitacao'); ?>
        <?php echo $form->dropDownList($model, 'tipo_habitacao', Aluno::$tipos_habitacao, array('empty' => '')); ?>
    </div>

    <div >
        <?php echo $form->labelEx($model, 'hidraulica'); ?>
        <?php echo $form->dropDownList($model, 'hidraulica', Aluno::$instalacoes_hidraulicas, array('empty' => '')); ?>
    </div>
    <div >
        <?php echo $form->labelEx($model, 'eletrica'); ?>
        <?php echo $form->dropDownList($model, 'eletrica', Aluno::$instalacoes_eletricas, array('empty' => '')); ?>
    </div>

    <div >
        <?php echo $form->labelEx($model, 'telefone_pai'); ?>
        <?php echo $form->textField($model, 'telefone_pai', array('size' => 24, 'maxlength' => 45)); ?>
        <?php echo $form->error($model, 'telefone_pai'); ?>
    </div>
    <div >
        <?php echo $form->labelEx($model, 'telefone_mae'); ?>
        <?php echo $form->textField($model, 'telefone_mae', array('size' => 23, 'maxlength' => 45)); ?>
        <?php echo $form->error($model, 'telefone_mae'); ?>
    </div>
    <div >
        <?php echo $form->labelEx($model, 'nome_escola'); ?>
        <?php echo $form->textField($model, 'nome_escola', array('size' => 50, 'maxlength' => 250)); ?>
        <?php echo $form->error($model, 'nome_escola'); ?>
    </div>

    <div >
        <?php echo $form->labelEx($model, 'zona_escola'); ?>
        <?php echo $form->textField($model, 'zona_escola', array('size' => 50, 'maxlength' => 45)); ?>
        <?php echo $form->error($model, 'zona_escola'); ?>
    </div>

    <div >
        <?php echo $form->labelEx($model, 'inicio_deficiencia'); ?>
        <?php echo $form->textField($model, 'inicio_deficiencia', array('size' => 20, 'maxlength' => 45)); ?>
        <?php echo $form->error($model, 'inicio_deficiencia'); ?>
    </div>

    <div >
        <?php echo $form->labelEx($model, 'observacao'); ?>
        <?php echo $form->textField($model, 'observacao', array('size' => 70, 'maxlength' => 250)); ?>
        <?php echo $form->error($model, 'observacao'); ?>
    </div>

    <div >
        <?php echo $form->labelEx($model, 'foto'); ?>
        <?php echo $form->textField($model, 'foto', array('size' => 88, 'maxlength' => 250)); ?>
        <?php echo CHtml::button('  Obter Arquivo  ', array('size' => 13)); ?>
        <?php echo $form->error($model, 'foto'); ?>
    </div>


    <div class="row buttons">
        <div >
            <?php echo CHtml::submitButton($model->isNewRecord ? '  Cadastrar  ' : '   Salvar   ', array('size' => 13)); ?>
        </div>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- form -->