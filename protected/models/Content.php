<?php

/**
 * This is the model class for table "go_content".
 *
 * The followings are the available columns in table 'go_content':
 * @property integer $id
 * @property integer $lang_id
 * @property integer $category_id
 * @property string $title
 * @property string $hash
 * @property string $description
 * @property string $meta_tags
 * @property string $meta_description
 * @property integer $created
 * @property integer $updated
 * @property integer $created_by
 * @property string $image
 */
class Content extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'go_content';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('lang_id, category_id, title, hash, description', 'required'),
			array('lang_id, category_id, created, updated, created_by', 'numerical', 'integerOnly'=>true),
			array('title, hash', 'length', 'max'=>150),
			array('meta_tags, meta_description, image', 'length', 'max'=>255),
            array('created, updated', 'default', 'setOnEmpty'=>true, 'value'=>null),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, lang_id, category_id, title, hash, description, meta_tags, meta_description, created, updated, created_by, image', 'safe', 'on'=>'search'),
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
            'category'=>array(self::BELONGS_TO,'Category','category_id'),
            'lang'=>array(self::BELONGS_TO,'Languages','lang_id'),
		);
	}

    public function behaviors(){
        return array(
            'CTimestampBehavior' => array(
                'class' => 'zii.behaviors.CTimestampBehavior',
                'createAttribute' => 'created',
                'updateAttribute' => 'updated',
            )
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
			'category_id' => 'Category',
			'title' => 'Title',
			'hash' => 'Hash',
			'description' => 'Description',
			'meta_tags' => 'Meta Tags',
			'meta_description' => 'Meta Description',
			'created' => 'Created',
			'updated' => 'Updated',
			'created_by' => 'Created By',
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
		$criteria->compare('category_id',$this->category_id);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('hash',$this->hash,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('meta_tags',$this->meta_tags,true);
		$criteria->compare('meta_description',$this->meta_description,true);
		$criteria->compare('created',$this->created);
		$criteria->compare('updated',$this->updated);
		$criteria->compare('created_by',$this->created_by);
		$criteria->compare('image',$this->image,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Content the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

    public function beforeSave(){
        if($this->image=CUploadedFile::getInstance($this,'image'))
        {
            preg_match("/.jpg|.gif|.bmp|.png/", $this->image, $f);
            $f=time().$f[0];
            $this->image->saveAs(Yii::getPathOfAlias('webroot').'/images/content/'.$f);
            $this->image=$f;
        }
        $this->description = strip_tags(str_replace('&nbsp;',' ',$this->description),'<p><a><h1><h2><h3><h4><h5><h6><img><ul><li><ol><i><u><b><strong>');
        return parent::beforeSave();
    }

    public function beforeDelete()
    {
        if(parent::beforeDelete())
        {
            unlink(Yii::getPathOfAlias('webroot').'/images/content/'.$this->image);
            return true;
        }
        return false;
    }

    public function getImageTag(){
        return $this->image !== '' ? CHtml::image('/images/content/'.$this->image):"";
    }
}
