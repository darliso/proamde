<?php
/* @var $this CaracteristicaAlunoController */
/* @var $model CaracteristicaAluno */

$this->breadcrumbs=array(
	'Caracteristica Alunos'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List CaracteristicaAluno', 'url'=>array('index')),
	array('label'=>'Create CaracteristicaAluno', 'url'=>array('create')),
	array('label'=>'Update CaracteristicaAluno', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete CaracteristicaAluno', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage CaracteristicaAluno', 'url'=>array('admin')),
);
?>

<h1>View CaracteristicaAluno #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'aluno_id',
		'caracteristica_id',
		'observacao',
	),
)); ?>
