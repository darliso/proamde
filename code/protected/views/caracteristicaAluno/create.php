<?php
/* @var $this CaracteristicaAlunoController */
/* @var $model CaracteristicaAluno */

$this->breadcrumbs=array(
	'Caracteristica Alunos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List CaracteristicaAluno', 'url'=>array('index')),
	array('label'=>'Manage CaracteristicaAluno', 'url'=>array('admin')),
);
?>

<h1>Create CaracteristicaAluno</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>