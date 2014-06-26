<?php

/**
 * This is the model class for table "Clientes".
 *
 * The followings are the available columns in table 'Clientes':
 * @property string $cedula
 * @property string $nombre
 * @property string $apellido
 * @property string $telefono
 * @property string $email
 * @property string $tipo
 * @property string $cedulaUsuario
 *
 * The followings are the available model relations:
 * @property Usuarios $cedulaUsuario0
 */
class Clientes extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'Clientes';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('cedula, nombre, apellido, telefono, email, tipo, cedulaUsuario', 'required'),
			array('cedula, cedulaUsuario', 'length', 'max'=>8),
			array('nombre, apellido', 'length', 'max'=>20),
			array('telefono', 'length', 'max'=>10),
			array('email', 'length', 'max'=>60),
			array('tipo', 'length', 'max'=>15),
			array('cedula, nombre, apellido, telefono, email, tipo, cedulaUsuario', 'safe', 'on'=>'search'),
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
			'UsuarioCreador' => array(self::BELONGS_TO, 'Usuarios', 'cedulaUsuario'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'cedula' => 'Cedula',
			'nombre' => 'Nombre',
			'apellido' => 'Apellido',
			'telefono' => 'Telefono',
			'email' => 'Email',
			'tipo' => 'Tipo',
			'cedulaUsuario' => 'Cedula Usuario',
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

		$criteria->compare('cedula',$this->cedula,true);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('apellido',$this->apellido,true);
		$criteria->compare('telefono',$this->telefono,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('tipo',$this->tipo,true);
		$criteria->compare('cedulaUsuario',$this->cedulaUsuario,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Clientes the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
