<?php

/**
 * This is the model class for table "tbl_usuario".
 *
 * The followings are the available columns in table 'tbl_usuario':
 * @property integer $idUsuario
 * @property string $nombre
 * @property string $apellido_paterno
 * @property string $apellido_materno
 * @property string $username
 * @property string $pw
 * @property integer $activo
 * @property string $permisos
 * @property integer $idTipoUsuario
 * @property string $email
 *
 * The followings are the available model relations:
 * @property TblcTipoUsuario $idTipoUsuario0
 */
class Usuario extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_usuario';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('activo, idTipoUsuario', 'numerical', 'integerOnly'=>true),
			array('nombre, apellido_paterno, apellido_materno, username, email', 'length', 'max'=>255),
			array('pw, permisos', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idUsuario, nombre, apellido_paterno, apellido_materno, username, pw, activo, permisos, idTipoUsuario, email', 'safe', 'on'=>'search'),
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
			'idTipoUsuario0' => array(self::BELONGS_TO, 'TblcTipoUsuario', 'idTipoUsuario'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idUsuario' => 'Id Usuario',
			'nombre' => 'Nombre',
			'apellido_paterno' => 'Apellido Paterno',
			'apellido_materno' => 'Apellido Materno',
			'username' => 'Username',
			'pw' => 'Pw',
			'activo' => 'Activo',
			'permisos' => 'Permisos',
			'idTipoUsuario' => 'Id Tipo Usuario',
			'email' => 'Email',
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

		$criteria->compare('idUsuario',$this->idUsuario);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('apellido_paterno',$this->apellido_paterno,true);
		$criteria->compare('apellido_materno',$this->apellido_materno,true);
		$criteria->compare('username',$this->username,true);
		$criteria->compare('pw',$this->pw,true);
		$criteria->compare('activo',$this->activo);
		$criteria->compare('permisos',$this->permisos,true);
		$criteria->compare('idTipoUsuario',$this->idTipoUsuario);
		$criteria->compare('email',$this->email,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Usuario the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
