<?php
/* @var $this PeriodoController */
/* @var $model Periodo */

$this->breadcrumbs=array(
	'Periodos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Periodo', 'url'=>array('index')),
	array('label'=>'Manage Periodo', 'url'=>array('admin')),
);
?>

<h1>Create Periodo</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>