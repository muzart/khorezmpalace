<?php

/**
 * This is the model class for table "go_room".
 *
 * The followings are the available columns in table 'go_room':
 * @property integer $id
 * @property integer $lang_id
 * @property string $title
 * @property string $duration
 * @property string $cost
 * @property string $description
 * @property integer $room_type_id
 * @property string $hash
 * @property string $image
 */
class Room extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'go_room';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('lang_id, title, duration, cost, description, room_type_id, hash, image', 'required'),
			array('lang_id, room_type_id', 'numerical', 'integerOnly'=>true),
			array('title, hash', 'length', 'max'=>150),
			array('duration, cost', 'length', 'max'=>50),
			array('image', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, lang_id, title, duration, cost, description, room_type_id, hash, image', 'safe', 'on'=>'search'),
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
			'lang_id' => 'Lang',
			'title' => 'Title',
			'duration' => 'Duration',
			'cost' => 'Cost',
			'description' => 'Description',
			'room_type_id' => 'Room Type',
			'hash' => 'Hash',
			'image' => 'Image',
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
		$criteria->compare('lang_id',$this->lang_id);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('duration',$this->duration,true);
		$criteria->compare('cost',$this->cost,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('room_type_id',$this->room_type_id);
		$criteria->compare('hash',$this->hash,true);
		$criteria->compare('image',$this->image,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Room the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
