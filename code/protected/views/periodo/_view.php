<?php
/* @var $this PeriodoController */
/* @var $data Periodo */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ano')); ?>:</b>
	<?php echo CHtml::encode($data->ano); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fechado')); ?>:</b>
	<?php echo CHtml::encode($data->fechado); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('inicio_inscricao')); ?>:</b>
	<?php echo CHtml::encode($data->inicio_inscricao); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fim_inscricao')); ?>:</b>
	<?php echo CHtml::encode($data->fim_inscricao); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('polo_id')); ?>:</b>
	<?php echo CHtml::encode($data->polo_id); ?>
	<br />


</div>