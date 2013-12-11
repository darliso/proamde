<?php

/**
 * This is the model class for table "periodo".
 *
 * The followings are the available columns in table 'periodo':
 * @property integer $id
 * @property string $ano
 * @property boolean $fechado
 * @property string $inicio_inscricao
 * @property string $fim_inscricao
 * @property integer $polo_id
 *
 * The followings are the available model relations:
 * @property Turma[] $turmas
 */
class Periodo extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'periodo';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ano, inicio_inscricao, fim_inscricao, polo_id', 'required'),
			array('polo_id', 'numerical', 'integerOnly'=>true),
			array('fechado', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, ano, fechado, inicio_inscricao, fim_inscricao, polo_id', 'safe', 'on'=>'search'),
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
			'turmas' => array(self::HAS_MANY, 'Turma', 'periodo_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'ano' => 'Ano',
			'fechado' => 'Fechado',
			'inicio_inscricao' => 'Inicio Inscricao',
			'fim_inscricao' => 'Fim Inscricao',
			'polo_id' => 'Polo',
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
		$criteria->compare('ano',$this->ano,true);
		$criteria->compare('fechado',$this->fechado);
		$criteria->compare('inicio_inscricao',$this->inicio_inscricao,true);
		$criteria->compare('fim_inscricao',$this->fim_inscricao,true);
		$criteria->compare('polo_id',$this->polo_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Periodo the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
