<?php

/**
 * This is the model class for table "go_slider".
 *
 * The followings are the available columns in table 'go_slider':
 * @property integer $id
 * @property string $img
 * @property string $title
 * @property integer $lang_id
 */
class Slider extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	const IMAGE_FOLDER = '/images/slider/';
	public function tableName()
	{
		return 'go_slider';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('lang_id', 'required'),
			array('lang_id', 'numerical', 'integerOnly'=>true),
			array('img', 'length', 'max'=>255),
			array('title', 'length', 'max'=>80),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, img, title, lang_id', 'safe', 'on'=>'search'),
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
			'img' => 'Img',
			'title' => 'Title',
			'lang_id' => 'Lang',
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
		$criteria->compare('img',$this->img,true);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('lang_id',$this->lang_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Slider the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public function beforeSave(){
		$image_file = CUploadedFile::getInstance($this,'img');
		if($image_file){
			$this->img = time()."_slider_".rand(1,999).".".$image_file->extensionName;
			$image_file->saveAs(Yii::getPathOfAlias('webroot').self::IMAGE_FOLDER.$this->img);
		}
		return parent::beforeSave();
	}
}
