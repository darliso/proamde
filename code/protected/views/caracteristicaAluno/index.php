<?php
/* @var $this CaracteristicaAlunoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Caracteristica Alunos',
);

$this->menu=array(
	array('label'=>'Create CaracteristicaAluno', 'url'=>array('create')),
	array('label'=>'Manage CaracteristicaAluno', 'url'=>array('admin')),
);
?>

<h1>Caracteristica Alunos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
