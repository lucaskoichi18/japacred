<?php

/**
 * This is the model class for table "tbl_emprestimo".
 *
 * The followings are the available columns in table 'tbl_emprestimo':
 * @property integer $id
 * @property string $valor
 * @property integer $parcelas
 * @property integer $id_user
 * @property string $valorcet
 *
 * The followings are the available model relations:
 * @property TblUser $idUser
 * @property TblParcelas[] $tblParcelases
 */
class Emprestimo extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_emprestimo';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('valor, parcelas, id_user, valorcet', 'required'),
			array('parcelas, id_user', 'numerical', 'integerOnly'=>true),
			array('valor, valorcet', 'length', 'max'=>10),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, valor, parcelas, id_user, valorcet', 'safe', 'on'=>'search'),
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
			'idUser' => array(self::BELONGS_TO, 'TblUser', 'id_user'),
			'tblParcelases' => array(self::HAS_MANY, 'TblParcelas', 'id_emprestimo'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'valor' => 'Valor',
			'parcelas' => 'Parcelas',
			'id_user' => 'Id User',
			'valorcet' => 'Valorcet',
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
		$criteria->compare('valor',$this->valor,true);
		$criteria->compare('parcelas',$this->parcelas);
		$criteria->compare('id_user',$this->id_user);
		$criteria->compare('valorcet',$this->valorcet,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Emprestimo the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}