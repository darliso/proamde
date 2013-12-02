<?php
/* @var $this AlunoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Alunos',
);

$this->menu=array(
	array('label'=>'Cadastrar Novo Aluno', 'url'=>array('create')),
	array('label'=>'Gerenciar Alunos', 'url'=>array('admin')),
);
?>

<h1>Alunos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
