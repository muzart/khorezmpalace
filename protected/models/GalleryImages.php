<?php

/**
 * This is the model class for table "go_gallery_images".
 *
 * The followings are the available columns in table 'go_gallery_images':
 * @property integer $id
 * @property integer $gallery_id
 * @property string $image
 * @property string $description_uz
 * @property string $description_ru
 * @property string $description_en
 */
class GalleryImages extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	const IMAGE_FOLDER = "/images/gallery/";
	public function tableName()
	{
		return 'go_gallery_images';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('gallery_id', 'required'),
			array('gallery_id', 'numerical', 'integerOnly'=>true),
			array('image', 'length', 'max'=>255),
			array('description_uz, description_ru, description_en', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, gallery_id, image, description_uz, description_ru, description_en', 'safe', 'on'=>'search'),
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
			'gallery'=>array(self::BELONGS_TO,'Gallery','gallery_id')
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'gallery_id' => 'Gallery',
			'image' => 'Image',
			'description_uz' => 'Description Uz',
			'description_ru' => 'Description Ru',
			'description_en' => 'Description En',
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
		$criteria->compare('gallery_id',$this->gallery_id);
		$criteria->compare('image',$this->image,true);
		$criteria->compare('description_uz',$this->description_uz,true);
		$criteria->compare('description_ru',$this->description_ru,true);
		$criteria->compare('description_en',$this->description_en,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return GalleryImages the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public function getImageSrc(){
		return Yii::app()->baseUrl.self::IMAGE_FOLDER.$this->image;
	}

	public function beforeSave()
	{
		$image_file = CUploadedFile::getInstance($this,'image');
		if($image_file)
		{
			$this->image = time()."_gallery_".rand(1,999).".".$image_file->extensionName;
			$image_file->saveAs(Yii::getPathOfAlias('webroot').self::IMAGE_FOLDER.$this->image);
		}
		return parent::beforeSave();
	}
}
