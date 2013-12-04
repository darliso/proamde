<?php
/* @var $this ResponsavelController */
/* @var $model Responsavel */

$this->breadcrumbs=array(
	'Responsavels'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Responsavel', 'url'=>array('index')),
	array('label'=>'Create Responsavel', 'url'=>array('create')),
	array('label'=>'Update Responsavel', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Responsavel', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Responsavel', 'url'=>array('admin')),
);
?>

<h1>View Responsavel #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'cpf',
		'nome',
		'endereco',
		'identidade',
		'bairro',
		'cidade',
		'estado',
		'estado_civil',
		'telefone',
	),
)); ?>
