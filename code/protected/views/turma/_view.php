<?php
/* @var $this TurmaController */
/* @var $data Turma */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('classe_id')); ?>:</b>
	<?php echo CHtml::encode($data->classe_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('polo_id')); ?>:</b>
	<?php echo CHtml::encode($data->polo_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nome')); ?>:</b>
	<?php echo CHtml::encode($data->nome); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ano')); ?>:</b>
	<?php echo CHtml::encode($data->ano); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('vagas')); ?>:</b>
	<?php echo CHtml::encode($data->vagas); ?>
	<br />


</div>