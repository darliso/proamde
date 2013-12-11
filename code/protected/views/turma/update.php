<?php
/* @var $this TurmaController */
/* @var $model Turma */

$this->breadcrumbs=array(
	'Turmas'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Alterar',
);

$this->menu=array(
	array('label'=>'Listar Turmas', 'url'=>array('index')),
	array('label'=>'Criar Nova Turma', 'url'=>array('create')),
	array('label'=>'Detalhes da Turma', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Gerenciar Turmas', 'url'=>array('admin')),
);
?>

<h1>Alterar dados da Turma <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>