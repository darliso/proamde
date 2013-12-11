<?php
/* @var $this TurmaController */
/* @var $model Turma */

$this->breadcrumbs=array(
	'Turmas'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Listar Turmas', 'url'=>array('index')),
	array('label'=>'Criar Nova Turma', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#turma-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Gerenciar Turmas</h1>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'turma-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'classe.nome',
		'nome',
		'periodo.ano',
		'vagas',
		'unica',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
