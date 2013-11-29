<?php
/* @var $this Aluno_controllerController */
/* @var $model Aluno */

$this->breadcrumbs=array(
	'Alunos'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Aluno', 'url'=>array('index')),
	array('label'=>'Create Aluno', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#aluno-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Alunos</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'aluno-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'responsavel_id',
		'pessoa_id',
		'atendente_id',
		'foto',
		'renda_familiar',
		/*
		'nome_pai',
		'nome_mae',
		'situacao_escolar',
		'certidao_numero',
		'certidao_folha',
		'certidao_livro',
		'certidao_cartorio',
		'tipo_sanguineo',
		'estado_civil',
		'profissao',
		'bairro',
		'zona',
		'ponto_referencia',
		'ocupacao_imovel',
		'tipo_habitacao',
		'hidraulica',
		'eletrica',
		'telefone_pai',
		'telefone_mae',
		'nome_escola',
		'zona_escola',
		'inicio_deficiencia',
		'alunocol',
		'observacao',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>