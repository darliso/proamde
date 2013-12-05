<?php
/* @var $this AlunoController */
/* @var $model Aluno */

$this->breadcrumbs=array(
	'Alunos'=>array('index'),
	'Gerenciar',
);

$this->menu=array(
	array('label'=>'Cadastrar Novo Aluno', 'url'=>array('create')),
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

<h1>Alunos</h1>

<?php echo CHtml::link('Pesquisa Avançada','#',array('class'=>'search-button')); ?>

<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div>
<!-- search-form -->
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
		'observacao',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
