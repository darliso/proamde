<?php

/**
 * This is the model class for table "aluno_has_caracteristica".
 *
 * The followings are the available columns in table 'aluno_has_caracteristica':
 * @property integer $id
 * @property integer $aluno_id
 * @property integer $caracteristica_id
 * @property string $observacao
 *
 * The followings are the available model relations:
 * @property Caracteristica $caracteristica
 * @property Aluno $aluno
 */
class CaracteristicaAluno extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'aluno_has_caracteristica';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('aluno_id, caracteristica_id', 'required'),
			array('aluno_id, caracteristica_id', 'numerical', 'integerOnly'=>true),
			array('observacao', 'length', 'max'=>250),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, aluno_id, caracteristica_id, observacao', 'safe', 'on'=>'search'),
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
			'caracteristica' => array(self::BELONGS_TO, 'Caracteristica', 'caracteristica_id'),
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
			'caracteristica_id' => 'Caracteristica',
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
		$criteria->compare('caracteristica_id',$this->caracteristica_id);
		$criteria->compare('observacao',$this->observacao,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return CaracteristicaAluno the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
