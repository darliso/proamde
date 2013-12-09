<?php
/* @var $this CaracteristicaAlunoController */
/* @var $model CaracteristicaAluno */

$this->breadcrumbs=array(
	'Caracteristica Alunos'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List CaracteristicaAluno', 'url'=>array('index')),
	array('label'=>'Create CaracteristicaAluno', 'url'=>array('create')),
	array('label'=>'View CaracteristicaAluno', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage CaracteristicaAluno', 'url'=>array('admin')),
);
?>

<h1>Update CaracteristicaAluno <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>