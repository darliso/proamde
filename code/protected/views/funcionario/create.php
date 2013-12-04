<?php
/* @var $this FuncionarioController */
/* @var $model Funcionario */

$this->breadcrumbs=array(
	'Funcionarios'=>array('index'),
	'Cadastrar',
);

$this->menu=array(
	array('label'=>'Listar Funcionários', 'url'=>array('index')),
	array('label'=>'Gerenciar Funcionários', 'url'=>array('admin')),
);
?>

<h1>Cadastrar Funcionário</h1>

<?php $this->renderPartial('_form', array('model'=>$model, 'pessoa'=>$model->pessoa)); ?>