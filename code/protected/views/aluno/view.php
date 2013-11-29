<?php
/* @var $this AlunoController */
/* @var $model Aluno */

$this->breadcrumbs=array(
	'Alunos'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Aluno', 'url'=>array('index')),
	array('label'=>'Create Aluno', 'url'=>array('create')),
	array('label'=>'Update Aluno', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Aluno', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Aluno', 'url'=>array('admin')),
);
?>

<h1>View Aluno #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'responsavel_id',
		'pessoa_id',
		'atendente_id',
		'foto',
		'renda_familiar',
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
	),
)); ?>
