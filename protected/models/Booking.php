<?php

/**
 * This is the model class for table "go_booking".
 *
 * The followings are the available columns in table 'go_booking':
 * @property integer $id
 * @property string $your_name
 * @property string $email
 * @property string $room_type
 * @property string $rooms
 * @property string $adults
 * @property string $childs
 * @property string $check_in
 * @property string $check_in_time
 * @property string $check_out
 * @property string $check_out_time
 * @property integer $created
 * @property integer $replied
 */
class Booking extends CActiveRecord
{
	const REPLY_NOT_REPLIED = 0;
	const REPLY_DENIED = -1;
	const REPLY_CONFIRMED = 1;
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'go_booking';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('your_name, email, room_type, check_in, check_in_time, check_out, check_out_time', 'required'),
			array('created, replied', 'numerical', 'integerOnly'=>true),
			array('your_name', 'length', 'max'=>40),
			array('email', 'length', 'max'=>80),
			array('room_type, rooms', 'length', 'max'=>20),
			array('adults, childs, check_in, check_in_time, check_out, check_out_time', 'length', 'max'=>10),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, your_name, email, room_type, rooms, adults, childs, check_in, check_in_time, check_out, check_out_time, created, replied', 'safe', 'on'=>'search'),
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
			'your_name' => Yii::t('main','Your name'),
			'email' => Yii::t('main','Your email'),
			'room_type' => Yii::t('main','Room type'),
			'rooms' => Yii::t('main','Rooms'),
			'adults' => Yii::t('main','Adults'),
			'childs' => Yii::t('main','Childs'),
			'check_in' => Yii::t('main','Check in'),
			'check_in_time' => Yii::t('main','Check in'),
			'check_out' => Yii::t('main','Check out'),
			'check_out_time' => Yii::t('main','Check out'),
			'created' => 'Время заказа',
			'replied' => 'Ответ',
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
		$criteria->compare('your_name',$this->your_name,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('room_type',$this->room_type,true);
		$criteria->compare('rooms',$this->rooms,true);
		$criteria->compare('adults',$this->adults,true);
		$criteria->compare('childs',$this->childs,true);
		$criteria->compare('check_in',$this->check_in,true);
		$criteria->compare('check_in_time',$this->check_in_time,true);
		$criteria->compare('check_out',$this->check_out,true);
		$criteria->compare('check_out_time',$this->check_out_time,true);
		$criteria->compare('created',$this->created);
		$criteria->compare('replied',$this->replied);
		$criteria->order = 'created DESC';
		$criteria->condition = 'replied = 0';
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	public function searchConfirmed()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('your_name',$this->your_name,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('room_type',$this->room_type,true);
		$criteria->compare('rooms',$this->rooms,true);
		$criteria->compare('adults',$this->adults,true);
		$criteria->compare('childs',$this->childs,true);
		$criteria->compare('check_in',$this->check_in,true);
		$criteria->compare('check_in_time',$this->check_in_time,true);
		$criteria->compare('check_out',$this->check_out,true);
		$criteria->compare('check_out_time',$this->check_out_time,true);
		$criteria->compare('created',$this->created);
		$criteria->compare('replied',$this->replied);
		$criteria->order = 'created DESC';
		$criteria->addCondition('replied=1');
//		$criteria->condition = 'replied='.self::REPLY_CONFIRMED;
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	public function searchDenied()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('your_name',$this->your_name,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('room_type',$this->room_type,true);
		$criteria->compare('rooms',$this->rooms,true);
		$criteria->compare('adults',$this->adults,true);
		$criteria->compare('childs',$this->childs,true);
		$criteria->compare('check_in',$this->check_in,true);
		$criteria->compare('check_in_time',$this->check_in_time,true);
		$criteria->compare('check_out',$this->check_out,true);
		$criteria->compare('check_out_time',$this->check_out_time,true);
		$criteria->compare('created',$this->created);
		$criteria->compare('replied',$this->replied);
		$criteria->order = 'created DESC';
		$criteria->condition = 'replied = -1';
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Booking the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public function beforeSave(){
		if($this->replied !== 0){
			$this->notifyEmail();
		}
		else{
			$this->created = time();
		}
		return parent::beforeSave();
	}

	public function notifyEmail(){
		if($this->replied == self::REPLY_DENIED){
			SendMail::send('notifyBookingDeny',$this->email, 'Khorezm Palace' , '', 'Reservation');
		}
		if($this->replied == self::REPLY_CONFIRMED){
			SendMail::send('notifyBookingConfirm',$this->email, 'Khorezm Palace' , '', 'Reservation');
		}
	}
}
