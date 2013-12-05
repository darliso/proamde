<?php
/* @var $this AlunoController */
/* @var $model Aluno */

$this->breadcrumbs=array(
	'Alunos'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Modificar',
);

$this->menu=array(
	array('label'=>'Cadastrar Novo Aluno', 'url'=>array('create')),
	array('label'=>'Gerenciar Alunos', 'url'=>array('admin')),
);
?>

<h1>Modificar Aluno <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model,'pessoa'=>$pessoa)); ?>