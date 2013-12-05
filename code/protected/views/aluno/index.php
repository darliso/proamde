<?php
/* @var $this AlunoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Alunos',
);

$this->menu=array(
	array('label'=>'Cadastrar Novo Aluno', 'url'=>array('create')),
);

    $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));

?>
