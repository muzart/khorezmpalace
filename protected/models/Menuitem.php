<?php

/**
 * This is the model class for table "go_menuitem".
 *
 * The followings are the available columns in table 'go_menuitem':
 * @property integer $id
 * @property integer $menu_id
 * @property string $title
 * @property integer $parent_id
 * @property string $url
 */
class Menuitem extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'go_menuitem';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('menu_id, title, parent_id, url', 'required'),
			array('menu_id, parent_id', 'numerical', 'integerOnly'=>true),
			array('title, url', 'length', 'max'=>150),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, menu_id, title, parent_id, url', 'safe', 'on'=>'search'),
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
            'menu'=>array(self::BELONGS_TO,'Menu','menu_id'),
            'parent'=>array(self::BELONGS_TO,'Menuitem','parent_id'),
            'childs'=>array(self::HAS_MANY,'Menuitem','parent_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'menu_id' => 'Menu',
			'title' => 'Title',
			'parent_id' => 'Parent',
			'url' => 'Url',
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
		$criteria->compare('menu_id',$this->menu_id);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('parent_id',$this->parent_id);
		$criteria->compare('url',$this->url,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Menuitem the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

    public static function getAll(){
//        $lang_id = (Yii::app()->language == 'uz')?1:(Yii::app()->language == 'ru')?2:3;
//        $menu = Menu::model()->find("lang_id=".$lang_id);
        return array('0'=>'')+CHtml::listData(
            self::model()->findAllByAttributes(array(
//                "menu_id"=>$menu->id,
//                'parent_id'=>0
			)),
            'id',
            'title');
    }
}
