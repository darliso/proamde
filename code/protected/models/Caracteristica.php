<?php

/**
 * This is the model class for table "caracteristica".
 *
 * The followings are the available columns in table 'caracteristica':
 * @property integer $id
 * @property string $nome
 * @property string $tipo
 *
 * The followings are the available model relations:
 * @property AlunoHasCaracteristica[] $alunoHasCaracteristicas
 * @property ClasseHasCaracteristica[] $classeHasCaracteristicas
 */
class Caracteristica extends CActiveRecord
{
    
        public static $tipos = array(
            'Deficiencia',
            'Patologia',
            'Sequela',
            'Ortese/Protese',
            'Observacao',
        );
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'caracteristica';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nome', 'required'),
			array('nome, tipo', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, nome, tipo', 'safe', 'on'=>'search'),
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
			'alunoHasCaracteristicas' => array(self::HAS_MANY, 'AlunoHasCaracteristica', 'caracteristica_id'),
			'classeHasCaracteristicas' => array(self::HAS_MANY, 'ClasseHasCaracteristica', 'caracteristica_id'),
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
			'tipo' => 'Tipo',
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
		$criteria->compare('tipo',$this->tipo,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Caracteristica the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
        
}
