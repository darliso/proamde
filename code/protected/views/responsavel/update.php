<?php
/* @var $this ResponsavelController */
/* @var $model Responsavel */

$this->breadcrumbs=array(
	'Responsavels'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Responsavel', 'url'=>array('index')),
	array('label'=>'Create Responsavel', 'url'=>array('create')),
	array('label'=>'View Responsavel', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Responsavel', 'url'=>array('admin')),
);
?>

<h1>Update Responsavel <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>