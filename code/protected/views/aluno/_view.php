<?php
/* @var $this AlunoController */
/* @var $data Aluno */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('responsavel_id')); ?>:</b>
	<?php echo CHtml::encode($data->responsavel_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pessoa_id')); ?>:</b>
	<?php echo CHtml::encode($data->pessoa_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('atendente_id')); ?>:</b>
	<?php echo CHtml::encode($data->atendente_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('foto')); ?>:</b>
	<?php echo CHtml::encode($data->foto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('renda_familiar')); ?>:</b>
	<?php echo CHtml::encode($data->renda_familiar); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nome_pai')); ?>:</b>
	<?php echo CHtml::encode($data->nome_pai); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('nome_mae')); ?>:</b>
	<?php echo CHtml::encode($data->nome_mae); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('situacao_escolar')); ?>:</b>
	<?php echo CHtml::encode($data->situacao_escolar); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('certidao_numero')); ?>:</b>
	<?php echo CHtml::encode($data->certidao_numero); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('certidao_folha')); ?>:</b>
	<?php echo CHtml::encode($data->certidao_folha); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('certidao_livro')); ?>:</b>
	<?php echo CHtml::encode($data->certidao_livro); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('certidao_cartorio')); ?>:</b>
	<?php echo CHtml::encode($data->certidao_cartorio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tipo_sanguineo')); ?>:</b>
	<?php echo CHtml::encode($data->tipo_sanguineo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('estado_civil')); ?>:</b>
	<?php echo CHtml::encode($data->estado_civil); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('profissao')); ?>:</b>
	<?php echo CHtml::encode($data->profissao); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bairro')); ?>:</b>
	<?php echo CHtml::encode($data->bairro); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('zona')); ?>:</b>
	<?php echo CHtml::encode($data->zona); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ponto_referencia')); ?>:</b>
	<?php echo CHtml::encode($data->ponto_referencia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ocupacao_imovel')); ?>:</b>
	<?php echo CHtml::encode($data->ocupacao_imovel); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tipo_habitacao')); ?>:</b>
	<?php echo CHtml::encode($data->tipo_habitacao); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hidraulica')); ?>:</b>
	<?php echo CHtml::encode($data->hidraulica); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('eletrica')); ?>:</b>
	<?php echo CHtml::encode($data->eletrica); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('telefone_pai')); ?>:</b>
	<?php echo CHtml::encode($data->telefone_pai); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('telefone_mae')); ?>:</b>
	<?php echo CHtml::encode($data->telefone_mae); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nome_escola')); ?>:</b>
	<?php echo CHtml::encode($data->nome_escola); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('zona_escola')); ?>:</b>
	<?php echo CHtml::encode($data->zona_escola); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('inicio_deficiencia')); ?>:</b>
	<?php echo CHtml::encode($data->inicio_deficiencia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('observacao')); ?>:</b>
	<?php echo CHtml::encode($data->observacao); ?>
	<br />

	*/ ?>

</div>