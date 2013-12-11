<?php
/* @var $this PeriodoController */
/* @var $model Periodo */

$this->breadcrumbs=array(
	'Periodos'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Periodo', 'url'=>array('index')),
	array('label'=>'Create Periodo', 'url'=>array('create')),
	array('label'=>'View Periodo', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Periodo', 'url'=>array('admin')),
);
?>

<h1>Update Periodo <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>