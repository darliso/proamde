<?php
/* @var $this PoloController */
/* @var $model Polo */

$this->breadcrumbs=array(
	'Polos'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Polo', 'url'=>array('index')),
	array('label'=>'Create Polo', 'url'=>array('create')),
	array('label'=>'View Polo', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Polo', 'url'=>array('admin')),
);
?>

<h1>Update Polo <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>