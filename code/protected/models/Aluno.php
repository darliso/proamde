<?php

/**
 * This is the model class for table "aluno".
 *
 * The followings are the available columns in table 'aluno':
 * @property integer $id
 * @property integer $responsavel_id
 * @property integer $pessoa_id
 * @property integer $atendente_id
 * @property string $foto
 * @property double $renda_familiar
 * @property string $nome_pai
 * @property string $nome_mae
 * @property string $situacao_escolar
 * @property string $certidao_numero
 * @property string $certidao_folha
 * @property string $certidao_livro
 * @property string $certidao_cartorio
 * @property string $tipo_sanguineo
 * @property string $estado_civil
 * @property string $profissao
 * @property string $bairro
 * @property string $zona
 * @property string $ponto_referencia
 * @property string $ocupacao_imovel
 * @property string $tipo_habitacao
 * @property string $hidraulica
 * @property string $eletrica
 * @property string $telefone_pai
 * @property string $telefone_mae
 * @property string $nome_escola
 * @property string $zona_escola
 * @property string $inicio_deficiencia
 * @property string $observacao
 *
 * The followings are the available model relations:
 * @property Funcionario $atendente
 * @property Pessoa $pessoa
 * @property Responsavel $responsavel
 * @property AlunoHasCaracteristica[] $alunoHasCaracteristicas
 * @property Triagem[] $triagems
 * @property TurmaHasAluno[] $turmaHasAlunos
 */
class Aluno extends Pessoa
{
    
        public static $situacoes_escolares = array (
            'Estuda',
            'Não Estuda',
            'Nunca Estudou',
            'Estudo Concluído',
        );
        
        public static $estados_civis = array (
            'Solteiro',
            'Casado',
            'Viúvo',
            'União Estável',
            'Divorciado',
            'Separado',
            'Outros',
        );
        
        public static $profissoes = array (
            'Desempregado',
            'Estudante',
            'Autônomo',
            'Sem ocupação',
            'Funcionário Público',
            'Inicia. Privada',
            'Aposentado',
            'Aposent. Invalidez',
            'Auxílio doença',
            'BPC',
            'Outros',
        );
        
        public static $zonas = array (
            'Leste',
            'Oeste',
            'Norte',
            'Sul',
            'Centro-Oeste',
            'Centro-Sul',
        );
        
        public static $tipos_sanguineos = array (
            'A positivo',
            'A negativo',
            'O positivo',
            'O negativo',
            'AB positivo',
            'AB negativo',
            'B positivo',
            'B negativo',
            'Não Sabe',
        );
        
        public static $ocupacoes_imovel = array (
            'Próprio',
            'Alugado',
            'Inválido',
            'Cedido',
            'Doação',
            'Outros',
        );
        
        public static $tipos_habitacao = array (
            'Alvenaria',
            'Madeira',
            'Taipa',
            'Mista',
            'Outros',
        );
        
        public static $instalacoes_hidraulicas = array (
            'Encanada',
            'Não Encanada',
            'Cacimba',
            'Poço',
            'Outros',
        );
        
        public static $instalacoes_eletricas = array (
            'Ligação Oficial',
            'Ligação Não Oficial (Gato)',
            'Não Possui',
            'Outros',
        );
        
        public $caracteristicas = array();
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'aluno';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('foto, renda_familiar, nome_pai, nome_mae', 'required'),
			array('responsavel_id, pessoa_id, atendente_id', 'numerical', 'integerOnly'=>true),
			array('renda_familiar', 'numerical'),
			array('foto, nome_pai, nome_mae, bairro, ponto_referencia, nome_escola, observacao', 'length', 'max'=>250),
			array('situacao_escolar, certidao_numero, certidao_folha, certidao_livro, certidao_cartorio, tipo_sanguineo, estado_civil, profissao, zona, ocupacao_imovel, tipo_habitacao, hidraulica, eletrica, telefone_pai, telefone_mae, zona_escola', 'length', 'max'=>45),
			array('inicio_deficiencia', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, responsavel_id, pessoa_id, atendente_id, foto, renda_familiar, nome_pai, nome_mae, situacao_escolar, certidao_numero, certidao_folha, certidao_livro, certidao_cartorio, tipo_sanguineo, estado_civil, profissao, bairro, zona, ponto_referencia, ocupacao_imovel, tipo_habitacao, hidraulica, eletrica, telefone_pai, telefone_mae, nome_escola, zona_escola, inicio_deficiencia, observacao', 'safe', 'on'=>'search'),
		);
	}

        public function setCaracteristica ($caracteristica) {
            if($this->caracteristicas)
            $this->caracteristicas->add($caracteristica);
            
            echo "$caracteristica";
            
        }
        
        public function setAtributes($array, $arrayPerson) {
            $this->attributes = $array;
            if($this->pessoa != null) {
                $this->pessoa->attributes = $arrayPerson;
            }
        }
        
        public function validateData() {
            $result = false;
            if($this->pessoa != null) {
                $result = $this->pessoa->validate() && $this->validate();
               
            }
            echo 'result:'.$result;
            return $result;
        }
        
        public function saveData() {
            
            if($this->pessoa != null) {
                $this->pessoa->save();
                $this->pessoa_id = $this->pessoa->id;
            }
            $this->responsavel_id = 1;
            $this->atendente_id= 3;
            $this->save();
        }
        
	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'atendente' => array(self::BELONGS_TO, 'Funcionario', 'atendente_id'),
			'pessoa' => array(self::BELONGS_TO, 'Pessoa', 'pessoa_id'),
			'responsavel' => array(self::BELONGS_TO, 'Responsavel', 'responsavel_id'),
			'alunoHasCaracteristicas' => array(self::HAS_MANY, 'AlunoHasCaracteristica', 'aluno_id'),
			'triagems' => array(self::HAS_MANY, 'Triagem', 'aluno_id'),
			'turmaHasAlunos' => array(self::HAS_MANY, 'TurmaHasAluno', 'aluno_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'responsavel_id' => 'Responsável',
			'pessoa_id' => 'Pessoa',
			'atendente_id' => 'Atendente',
			'foto' => 'Foto',
			'renda_familiar' => 'Renda Familiar',
			'nome_pai' => 'Nome do Pai',
			'nome_mae' => 'Nome da Mae',
			'situacao_escolar' => 'Situação Escolar',
			'certidao_numero' => 'Nº da Certidão',
			'certidao_folha' => 'Folha da Certidão',
			'certidao_livro' => 'Livro da Certidão',
			'certidao_cartorio' => 'Cartório da Certidão',
			'tipo_sanguineo' => 'Tipo Sanguíneo',
			'estado_civil' => 'Estado Civil',
			'profissao' => 'Profissão',
			'bairro' => 'Bairro',
			'zona' => 'Zona',
			'ponto_referencia' => 'Ponto de Referencia',
			'ocupacao_imovel' => 'Ocupacao (Imovel)',
			'tipo_habitacao' => 'Tipo de Habitacao',
			'hidraulica' => 'Instalação Hidráulica',
			'eletrica' => 'Instalação Elétrica',
			'telefone_pai' => 'Telefone do Pai',
			'telefone_mae' => 'Telefone da Mae',
			'nome_escola' => 'Nome da Escola',
			'zona_escola' => 'Zona da Escola',
			'inicio_deficiencia' => 'Inicio da Deficiência',
			'observacao' => 'Observacão',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('foto',$this->foto,true,true);
		$criteria->compare('renda_familiar',$this->renda_familiar,true);
		$criteria->compare('nome_pai',$this->nome_pai,true);
		$criteria->compare('nome_mae',$this->nome_mae,true);
		$criteria->compare('situacao_escolar',$this->situacao_escolar,true);
		$criteria->compare('certidao_numero',$this->certidao_numero,true);
		$criteria->compare('certidao_folha',$this->certidao_folha,true);
		$criteria->compare('certidao_livro',$this->certidao_livro,true);
		$criteria->compare('certidao_cartorio',$this->certidao_cartorio,true);
		$criteria->compare('tipo_sanguineo',$this->tipo_sanguineo,true);
		$criteria->compare('estado_civil',$this->estado_civil,true);
		$criteria->compare('profissao',$this->profissao,true);
		$criteria->compare('bairro',$this->bairro,true);
		$criteria->compare('zona',$this->zona,true);
		$criteria->compare('ponto_referencia',$this->ponto_referencia,true);
		$criteria->compare('ocupacao_imovel',$this->ocupacao_imovel,true);
		$criteria->compare('tipo_habitacao',$this->tipo_habitacao,true);
		$criteria->compare('hidraulica',$this->hidraulica,true);
		$criteria->compare('eletrica',$this->eletrica,true);
		$criteria->compare('telefone_pai',$this->telefone_pai,true);
		$criteria->compare('telefone_mae',$this->telefone_mae,true);
		$criteria->compare('nome_escola',$this->nome_escola,true);
		$criteria->compare('zona_escola',$this->zona_escola,true);
		$criteria->compare('inicio_deficiencia',$this->inicio_deficiencia,true);
		$criteria->compare('observacao',$this->observacao,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Aluno the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
