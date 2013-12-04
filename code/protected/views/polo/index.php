<?php
/* @var $this PoloController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Polos',
);

$this->menu=array(
	array('label'=>'Create Polo', 'url'=>array('create')),
	array('label'=>'Manage Polo', 'url'=>array('admin')),
);
?>

<h1>Polos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
