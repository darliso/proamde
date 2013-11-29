<?php

/**
 * This is the model class for table "triagem".
 *
 * The followings are the available columns in table 'triagem':
 * @property integer $id
 * @property integer $aluno_id
 * @property string $descricao
 * @property string $resposta
 * @property string $observacao
 *
 * The followings are the available model relations:
 * @property Aluno $aluno
 */
class Triagem extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'triagem';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('aluno_id, descricao, resposta', 'required'),
			array('aluno_id', 'numerical', 'integerOnly'=>true),
			array('descricao, observacao', 'length', 'max'=>250),
			array('resposta', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, aluno_id, descricao, resposta, observacao', 'safe', 'on'=>'search'),
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
			'aluno' => array(self::BELONGS_TO, 'Aluno', 'aluno_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'aluno_id' => 'Aluno',
			'descricao' => 'Descricao',
			'resposta' => 'Resposta',
			'observacao' => 'Observacao',
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
		$criteria->compare('aluno_id',$this->aluno_id);
		$criteria->compare('descricao',$this->descricao,true);
		$criteria->compare('resposta',$this->resposta,true);
		$criteria->compare('observacao',$this->observacao,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Triagem the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
