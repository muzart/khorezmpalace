<?php

/**
 * This is the model class for table "go_room_type".
 *
 * The followings are the available columns in table 'go_room_type':
 * @property integer $id
 * @property string $name
 * @property integer $lang_id
 * @property string $hash
 * @property string $img
 */
class RoomType extends CActiveRecord
{
	public $image_file;
	/**
	 * @return string the associated database table name
	 */
	const IMAGE_FOLDER = '/images/roomtype/';
	public function tableName()
	{
		return 'go_room_type';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, lang_id, hash', 'required'),
			array('lang_id', 'numerical', 'integerOnly'=>true),
			array('name, hash', 'length', 'max'=>50),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, name, lang_id, hash', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'name' => 'Name',
			'lang_id' => 'Lang',
			'hash' => 'Hash',
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
		$criteria->compare('name',$this->name,true);
		$criteria->compare('lang_id',$this->lang_id);
		$criteria->compare('hash',$this->hash,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return RoomType the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public function beforeSave(){
		$image_file = CUploadedFile::getInstance($this,'image_file');
		if($image_file) {
			$this->img = time() . "_rt_" . rand(1, 999) . "." . $image_file->extensionName;
			$image_file->saveAs(Yii::getPathOfAlias('webroot') . self::IMAGE_FOLDER . $this->img);
		}
		return parent::beforeSave();
	}
}
