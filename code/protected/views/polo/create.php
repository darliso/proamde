<?php
/* @var $this PoloController */
/* @var $model Polo */

$this->breadcrumbs=array(
	'Polos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Polo', 'url'=>array('index')),
	array('label'=>'Manage Polo', 'url'=>array('admin')),
);
?>

<h1>Create Polo</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>