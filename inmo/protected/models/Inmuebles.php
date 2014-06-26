<?php

/**
 * This is the model class for table "Inmuebles".
 *
 * The followings are the available columns in table 'Inmuebles':
 * @property integer $IdInmueble
 * @property string $coordenadas
 * @property string $categoria
 * @property integer $superficie
 * @property integer $antiguedad
 * @property integer $garage
 * @property integer $precio
 * @property integer $cantBanio
 * @property integer $cantDormitorio
 * @property integer $cantAmbiente
 * @property integer $destacado
 * @property string $cedulaUsuario
 * @property integer $idBarrio
 *
 * The followings are the available model relations:
 * @property Apartamentos $apartamentos
 * @property Casas $casas
 * @property Imagenes[] $imagenes
 * @property Barrios $idBarrio0
 * @property Usuarios $cedulaUsuario0
 * @property Visitas[] $visitases
 */
abstract class Inmuebles extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'Inmuebles';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('coordenadas, categoria, superficie, antiguedad, garage, precio, cantBanio, cantDormitorio, cantAmbiente, destacado, cedulaUsuario, idBarrio', 'required'),
			array('superficie, antiguedad, garage, precio, cantBanio, cantDormitorio, cantAmbiente, destacado, idBarrio', 'numerical', 'integerOnly'=>true),
			array('coordenadas', 'length', 'max'=>50),
			array('categoria', 'length', 'max'=>20),
			array('cedulaUsuario', 'length', 'max'=>8),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('IdInmueble, coordenadas, categoria, superficie, antiguedad, garage, precio, cantBanio, cantDormitorio, cantAmbiente, destacado, cedulaUsuario, idBarrio', 'safe', 'on'=>'search'),
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
			'apartamentos' => array(self::HAS_ONE, 'Apartamentos', 'IdInmueble'),
			'casas' => array(self::HAS_ONE, 'Casas', 'IdInmueble'),
			//'imagenes' => array(self::HAS_MANY, 'Imagenes', 'idInmueble'),
			//'idBarrio' => array(self::BELONGS_TO, 'Barrios', 'idBarrio'),
			'cedulaUsuario' => array(self::BELONGS_TO, 'Usuarios', 'cedulaUsuario'),
			//'visitas' => array(self::HAS_MANY, 'Visitas', 'idInmueble'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'IdInmueble' => 'Id Inmueble',
			'coordenadas' => 'Coordenadas',
			'categoria' => 'Categoria',
			'superficie' => 'Superficie',
			'antiguedad' => 'Antiguedad',
			'garage' => 'Garage',
			'precio' => 'Precio',
			'cantBanio' => 'Cant Banio',
			'cantDormitorio' => 'Cant Dormitorio',
			'cantAmbiente' => 'Cant Ambiente',
			'destacado' => 'Destacado',
			'cedulaUsuario' => 'Cedula Usuario',
			'idBarrio' => 'Id Barrio',
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
		$criteria->compare('coordenadas',$this->coordenadas,true);
		$criteria->compare('categoria',$this->categoria,true);
		$criteria->compare('superficie',$this->superficie);
		$criteria->compare('antiguedad',$this->antiguedad);
		$criteria->compare('garage',$this->garage);
		$criteria->compare('precio',$this->precio);
		$criteria->compare('cantBanio',$this->cantBanio);
		$criteria->compare('cantDormitorio',$this->cantDormitorio);
		$criteria->compare('cantAmbiente',$this->cantAmbiente);
		$criteria->compare('destacado',$this->destacado);
		$criteria->compare('cedulaUsuario',$this->cedulaUsuario,true);
		$criteria->compare('idBarrio',$this->idBarrio);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Inmuebles the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
