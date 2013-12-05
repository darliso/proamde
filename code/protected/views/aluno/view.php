<?php
/* @var $this AlunoController */
/* @var $model Aluno */

$this->breadcrumbs=array(
	'Alunos'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Cadastrar Novo Aluno', 'url'=>array('create')),
	array('label'=>'Gerenciar Alunos', 'url'=>array('admin')),
);
?>

<h1>Aluno - <?php echo $model->pessoa->nome; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model->pessoa,
	'attributes'=>array(
		'nome',
                'email',
		'cpf',
                'rg',
                'genero',
                'endereco',
                'data_de_nascimento',
		'uf',
                'cep',
                'telefone',
                'celular',
                'rede_ensino',
		'escolaridade',
	),
)); ?>
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
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
