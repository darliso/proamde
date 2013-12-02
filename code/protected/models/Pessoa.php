<?php

/**
 * This is the model class for table "pessoa".
 *
 * The followings are the available columns in table 'pessoa':
 * @property integer $id
 * @property string $nome
 * @property integer $cpf
 * @property string $data_de_nascimento
 * @property integer $rg
 * @property string $genero
 * @property string $naturalidade
 * @property string $endereco
 * @property integer $cep
 * @property string $telefone
 * @property string $celular
 * @property string $email
 * @property string $escolaridade
 * @property string $rede_ensino
 *
 * The followings are the available model relations:
 * @property Aluno[] $alunos
 * @property Funcionario[] $funcionarios
 * @property Historico[] $historicos
 */
class Pessoa extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'pessoa';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nome, cpf, data_de_nascimento, rg, genero, naturalidade, endereco, cep', 'required'),
			array('cpf, rg, cep', 'numerical', 'integerOnly'=>true),
			array('nome, endereco, email', 'length', 'max'=>250),
			array('genero, naturalidade, telefone, celular, escolaridade, rede_ensino', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, nome, cpf, data_de_nascimento, rg, genero, naturalidade, endereco, cep, telefone, celular, email, escolaridade, rede_ensino', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'alunos' => array(self::HAS_ONE, 'Aluno', 'pessoa_id'),
			'funcionarios' => array(self::HAS_ONE, 'Funcionario', 'pessoa_id'),
			'historicos' => array(self::HAS_MANY, 'Historico', 'pessoa_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'nome' => 'Nome',
			'cpf' => 'Cpf',
			'data_de_nascimento' => 'Data De Nascimento',
			'rg' => 'Identidade',
			'genero' => 'Sexo',
			'naturalidade' => 'Naturalidade',
			'endereco' => 'Endereco',
			'cep' => 'CEP',
			'telefone' => 'Telefone',
			'celular' => 'Celular',
			'email' => 'Email',
			'escolaridade' => 'Escolaridade',
			'rede_ensino' => 'Rede de Ensino',
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
		$criteria->compare('nome',$this->nome,true);
		$criteria->compare('cpf',$this->cpf);
		$criteria->compare('data_de_nascimento',$this->data_de_nascimento,true);
		$criteria->compare('rg',$this->rg);
		$criteria->compare('genero',$this->genero,true);
		$criteria->compare('naturalidade',$this->naturalidade,true);
		$criteria->compare('endereco',$this->endereco,true);
		$criteria->compare('cep',$this->cep);
		$criteria->compare('telefone',$this->telefone,true);
		$criteria->compare('celular',$this->celular,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('escolaridade',$this->escolaridade,true);
		$criteria->compare('rede_ensino',$this->rede_ensino,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Pessoa the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
