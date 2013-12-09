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
        <?php
        $this->widget('CMaskedTextField', array(
            'model' => $pessoa,
            'attribute' => 'cpf',
            'name' => 'cpf',
            'mask' => '99999999999',
            'htmlOptions' => array(
                'style' => 'width:120px;'
            ),
        ));
        ?>
        <?php echo $form->error($pessoa, 'cpf'); ?>
    </div>
    <div >
        <?php echo $form->labelEx($pessoa, 'rg'); ?>
        <?php
        $this->widget('CMaskedTextField', array(
            'model' => $pessoa,
            'attribute' => 'rg',
            'name' => 'rg',
            'mask' => '99999999',
            'htmlOptions' => array(
                'style' => 'width:100px;'
            ),
        ));
        ?>
        <?php echo $form->error($pessoa, 'rg'); ?>
    </div>
    <div >
        <?php echo $form->labelEx($pessoa, 'data_de_nascimento'); ?>
        <?php
        $this->widget('CMaskedTextField', array(
            'model' => $pessoa,
            'attribute' => 'data_de_nascimento',
            'name' => 'date',
            'mask' => '99/99/9999',
            'htmlOptions' => array(
                'style' => 'width:100px;'
            ),
        ));
        ?>
        <?php echo $form->error($pessoa, 'data_de_nascimento'); ?>
    </div>
    <div >
        <?php echo $form->labelEx($pessoa, 'genero'); ?>
        <?php echo $form->dropDownList($pessoa, 'genero', array('Masculino'=>'Masculino', 'Feminino'=>'Feminino'), array('empty' => '')); ?>
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
        <?php echo CHtml::dropDownList('zona', $model, Aluno::$zonas, array('empty' => '')); ?>
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
        <?php
        $this->widget('CMaskedTextField', array(
            'model' => $pessoa,
            'attribute' => 'cep',
            'name' => 'cep',
            'mask' => '99999999',
            'htmlOptions' => array(
                'style' => 'width:100px;'
            ),
        ));
        ?>
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
        <?php
        $this->widget('CMaskedTextField', array(
            'model' => $model,
            'attribute' => 'inicio_deficiencia',
            'name' => 'inicio_deficiencia',
            'mask' => '99/99/9999',
            'htmlOptions' => array(
                'style' => 'width:100px;'
            ),
        ));
        ?>
        <?php echo $form->error($model, 'inicio_deficiencia'); ?>
    </div>

    <div >
        <?php echo $form->labelEx($model, 'observacao'); ?>
        <?php echo $form->textField($model, 'observacao', array('size' => 70, 'maxlength' => 250)); ?>
        <?php echo $form->error($model, 'observacao'); ?>
    </div>

    <div >
        <?php echo $form->labelEx($model, 'foto'); ?>
        <?php echo $form->textField($model, 'foto', array('size' => 70, 'maxlength' => 250)); ?>
        <?php
        $this->widget('CMultiFileUpload', array(
            'name' => 'files',
            'accept' => 'jpg|png',
            'max' => 3,
            'remove' => Yii::t('ui', 'Remove'),
            'denied' => 'Acesso negado ao Arquivo', // message that is displayed when a file type is not allowed
            'duplicate' => 'Arquivo duplicado', //message that is displayed when a file appears twice
            'htmlOptions' => array('size' => 25),
        ));
        ?>
        <?php echo $form->error($model, 'foto'); ?>
    </div>
    <br/>
    <br/>

    <?php
    $caracteristicas = Caracteristica::model()->findAll();
    echo '<p>Caracteristicas:</p>';
    foreach (Caracteristica::$tipos as $tipo) {
        echo '<div class="column" style="max-width: 14">';
        echo "<b>$tipo</b>";
        foreach ($caracteristicas as $caract) {
            if ($caract->tipo == $tipo) {
                echo '<div class="row" style="background: #FFFFFF">';
                echo $form->checkBox($caracteristica, 'nome', array(//TODO: codigo deve ser alterado.
                    'name' => 'check' . $caract->id,
                    'value' => $caract->nome,
                    'checked'=> in_array($caract->nome, $this->info) ? '1' : '0', 
                    'uncheckValue' => null)) . ' ';
                echo $caract->nome;
                echo '</div>';
            }
        }
        echo '</div>';
    }
    ?>

    <div class="column">
    <?php
    echo "<br/><br/><br/>Triagem:<br/><br/>";
    echo '<Table BORDER="1">';
    echo "<TR><TD>Nome</TD><TD> SIM</TD><TD>NÃO</TD><TD>Observação</TD>";
    foreach (Aluno::$triagem as $key => $value) {
            echo '<TR>';
            echo "<TD>$value</TD>";
            echo "<TD>";
            echo $form->radioButton($caracteristica, 'nome', array(//TODO: codigo deve ser alterado.
                'name' => 'check' . $key,
                'value' => 'Sim',
                'checked'=> in_array($key, $this->info) ? '1' : '0',
                'uncheckValue' => null)) . ' ';
            echo '</TD>';
            echo "<TD>";
            echo $form->radioButton($caracteristica, 'nome', array(//TODO: codigo deve ser alterado.
                'name' => 'check' . $key,
                'value' => 'Não',
                'checked'=> in_array($key, $this->info) ? '0' : '1',
                'uncheckValue' => null)) . ' ';
            echo '</TD>';
            echo "<TD>";
            echo $form->textField($caracteristica, 'nome', array('name'=>'obs'.$key, 'size' => 50, 'maxlength' => 250));
            echo '</TD>';
            echo '</TR>';
    }
    echo '</Table>';
    ?>
    </div>

    <br/>

    <div class="column">
        <?php
        $this->widget('zii.widgets.jui.CJuiButton', array(
            'buttonType' => 'submit',
            'name' => 'btnSubmit',
            'value' => '1',
            'caption' => $model->isNewRecord ? '  Cadastrar  ' : '   Salvar   ',
            'htmlOptions' => array('class' => 'ui-button-primary')
        ));
        ?>
    </div>

    <br/>
    <br/>

    <?php $this->endWidget(); ?>

</div><!-- form -->