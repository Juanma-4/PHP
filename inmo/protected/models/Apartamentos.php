<?php

/**
 * This is the model class for table "Apartamentos".
 *
 * The followings are the available columns in table 'Apartamentos':
 * @property integer $IdInmueble
 * @property integer $numPiso
 * @property integer $numApartamento
 * @property integer $gastosComunes
 * @property integer $ascensor
 *
 * The followings are the available model relations:
 * @property Inmuebles $idInmueble
 */
class Apartamentos extends Inmuebles
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'Apartamentos';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('IdInmueble, numPiso, numApartamento, gastosComunes, ascensor', 'required'),
			array('IdInmueble, numPiso, numApartamento, gastosComunes, ascensor', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('IdInmueble, numPiso, numApartamento, gastosComunes, ascensor', 'safe', 'on'=>'search'),
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
			'idInmueble' => array(self::BELONGS_TO, 'Inmuebles', 'IdInmueble'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'IdInmueble' => 'Id Inmueble',
			'numPiso' => 'Num Piso',
			'numApartamento' => 'Num Apartamento',
			'gastosComunes' => 'Gastos Comunes',
			'ascensor' => 'Ascensor',
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

		$criteria->compare('IdInmueble',$this->IdInmueble);
		$criteria->compare('numPiso',$this->numPiso);
		$criteria->compare('numApartamento',$this->numApartamento);
		$criteria->compare('gastosComunes',$this->gastosComunes);
		$criteria->compare('ascensor',$this->ascensor);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Apartamentos the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
