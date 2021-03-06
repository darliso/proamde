<?php

/**
 * This is the model class for table "turma".
 *
 * The followings are the available columns in table 'turma':
 * @property integer $id
 * @property integer $classe_id
 * @property integer $periodo_id
 * @property string $nome
 * @property integer $vagas
 * @property boolean $unica
 *
 * The followings are the available model relations:
 * @property Periodo $periodo
 * @property Classe $classe
 * @property TurmaHasAluno[] $turmaHasAlunos
 */
class Turma extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'turma';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('classe_id, nome, vagas', 'required'),
			array('classe_id, periodo_id, vagas', 'numerical', 'integerOnly'=>true),
			array('nome', 'length', 'max'=>45),
			array('unica', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, classe_id, periodo_id, nome, vagas, unica', 'safe', 'on'=>'search'),
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
			'periodo' => array(self::BELONGS_TO, 'Periodo', 'periodo_id'),
			'classe' => array(self::BELONGS_TO, 'Classe', 'classe_id'),
			'turmaHasAlunos' => array(self::HAS_MANY, 'TurmaHasAluno', 'turma_int'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'classe_id' => 'Classe',
			'periodo_id' => 'Periodo',
			'nome' => 'Nome',
			'vagas' => 'Vagas',
			'unica' => 'Unica',
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
                $this->classe = Classe::model()->findAllByAttributes(array('id'=>$this->classe_id));
                $this->periodo = Classe::model()->findAllByAttributes(array('id'=>$this->periodo_id));
		$criteria=new CDbCriteria;
                $criteria->with = array('classe', 'periodo');
		$criteria->compare('id',$this->id);
                $criteria->compare('classe.nome','',true);
                $criteria->compare('periodo.ano','',true);
		$criteria->compare('classe_id',$this->classe_id);
		$criteria->compare('periodo_id',$this->periodo_id);
		$criteria->compare('nome',$this->nome,true);
		$criteria->compare('vagas',$this->vagas);
		$criteria->compare('unica',$this->unica);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Turma the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
