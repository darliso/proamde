<?php
/* @var $this PerguntaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Perguntas',
);

$this->menu=array(
	array('label'=>'Create Pergunta', 'url'=>array('create')),
	array('label'=>'Manage Pergunta', 'url'=>array('admin')),
);
?>

<h1>Perguntas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
