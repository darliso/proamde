<?php
/* @var $this FuncionarioController */
/* @var $model Funcionario */

$this->breadcrumbs=array(
	'Funcionarios'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Funcionario', 'url'=>array('index')),
	array('label'=>'Create Funcionario', 'url'=>array('create')),
	array('label'=>'Update Funcionario', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Funcionario', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Deseja Realmente Deletar este Funcionario?')),
	array('label'=>'Manage Funcionario', 'url'=>array('admin')),
);
?>

<h1>Funcionário <?php echo $model->pessoa->nome; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model->pessoa,
	'attributes'=>array(
		'id',
		'nome',
		'cpf',
                'rg',
		'email',
	),
)); ?>
