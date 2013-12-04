<?php
/* @var $this ResponsavelController */
/* @var $model Responsavel */

$this->breadcrumbs=array(
	'Responsavels'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Responsavel', 'url'=>array('index')),
	array('label'=>'Manage Responsavel', 'url'=>array('admin')),
);
?>

<h1>Create Responsavel</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>