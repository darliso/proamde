<?php
/* @var $this TurmaController */
/* @var $model Turma */

$this->breadcrumbs=array(
	'Turmas'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Listar Turmas', 'url'=>array('index')),
	array('label'=>'Criar Nova Turma', 'url'=>array('create')),
	array('label'=>'Alterar Esta Turma', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Deletar Esta Turma', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Gerenciar Turmas', 'url'=>array('admin')),
);
?>

<h1>Detalhes da Turma #<?php echo $model->nome; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'classe_id',
		'periodo_id',
		'nome',
		'vagas',
		'unica',
	),
)); ?>
