<?php
/* @var $this PoloController */
/* @var $model Polo */

$this->breadcrumbs=array(
	'Polos'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Polo', 'url'=>array('index')),
	array('label'=>'Create Polo', 'url'=>array('create')),
	array('label'=>'Update Polo', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Polo', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Polo', 'url'=>array('admin')),
);
?>

<h1>View Polo #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nome',
	),
)); ?>
