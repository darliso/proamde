<?php
/* @var $this CaracteristicaAlunoController */
/* @var $data CaracteristicaAluno */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('aluno_id')); ?>:</b>
	<?php echo CHtml::encode($data->aluno_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('caracteristica_id')); ?>:</b>
	<?php echo CHtml::encode($data->caracteristica_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('observacao')); ?>:</b>
	<?php echo CHtml::encode($data->observacao); ?>
	<br />


</div>