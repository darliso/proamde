<?php

/**
 * This is the model class for table "funcionario".
 *
 * The followings are the available columns in table 'funcionario':
 * @property integer $id
 * @property integer $pessoa_id
 * @property integer $polo_id
 * @property string $pis_pasep
 * @property string $tipo
 * @property string $horario
 * @property string $curso_formacao
 * @property string $instituicao_ensino
 * @property string $observacao
 *
 * The followings are the available model relations:
 * @property Aluno[] $alunos
 * @property Polo $polo
 * @property Pessoa $pessoa
 * @property TblUser[] $tblUsers
 * @property TurmaHasFuncionario[] $turmaHasFuncionarios
 */
class Funcionario extends Pessoa
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'funcionario';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('pessoa_id, polo_id, pis_pasep, tipo, horario', 'required'),
			array('pessoa_id, polo_id', 'numerical', 'integerOnly'=>true),
			array('pis_pasep, tipo, horario', 'length', 'max'=>45),
			array('curso_formacao, instituicao_ensino, observacao', 'length', 'max'=>250),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, pessoa_id, polo_id, pis_pasep, tipo, horario, curso_formacao, instituicao_ensino, observacao', 'safe', 'on'=>'search'),
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
			'alunos' => array(self::HAS_MANY, 'Aluno', 'atendente_id'),
			'polo' => array(self::BELONGS_TO, 'Polo', 'polo_id'),
			'pessoa' => array(self::BELONGS_TO, 'Pessoa', 'pessoa_id'),
			'tblUsers' => array(self::HAS_MANY, 'TblUser', 'funcionario_id'),
			'turmaHasFuncionarios' => array(self::HAS_MANY, 'TurmaHasFuncionario', 'funcionario_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'pessoa_id' => 'Pessoa',
			'polo_id' => 'Pólo',
			'pis_pasep' => 'Pis/Pasep',
			'tipo' => 'Tipo',
			'horario' => 'Horario',
			'curso_formacao' => 'Curso Formação',
			'instituicao_ensino' => 'Instituição de Ensino',
			'observacao' => 'Observação',
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
		$criteria->compare('pessoa_id',$this->pessoa_id);
		$criteria->compare('polo_id',$this->polo_id);
		$criteria->compare('pis_pasep',$this->pis_pasep,true);
		$criteria->compare('tipo',$this->tipo,true);
		$criteria->compare('horario',$this->horario,true);
		$criteria->compare('curso_formacao',$this->curso_formacao,true);
		$criteria->compare('instituicao_ensino',$this->instituicao_ensino,true);
		$criteria->compare('observacao',$this->observacao,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Funcionario the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
