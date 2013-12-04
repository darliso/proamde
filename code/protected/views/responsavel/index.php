<?php
/* @var $this ResponsavelController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Responsavels',
);

$this->menu=array(
	array('label'=>'Create Responsavel', 'url'=>array('create')),
	array('label'=>'Manage Responsavel', 'url'=>array('admin')),
);
?>

<h1>Responsavels</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
