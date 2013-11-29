<?php
/* @var $this FuncionarioController */
/* @var $data Funcionario */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pessoa_id')); ?>:</b>
	<?php echo CHtml::encode($data->pessoa_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('polo_id')); ?>:</b>
	<?php echo CHtml::encode($data->polo_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pis_pasep')); ?>:</b>
	<?php echo CHtml::encode($data->pis_pasep); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tipo')); ?>:</b>
	<?php echo CHtml::encode($data->tipo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('horario')); ?>:</b>
	<?php echo CHtml::encode($data->horario); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('curso_formacao')); ?>:</b>
	<?php echo CHtml::encode($data->curso_formacao); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('instituicao_ensino')); ?>:</b>
	<?php echo CHtml::encode($data->instituicao_ensino); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('observacao')); ?>:</b>
	<?php echo CHtml::encode($data->observacao); ?>
	<br />

	*/ ?>

</div>