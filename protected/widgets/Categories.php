<?php
/**
 * Created by PhpStorm.
 * User: Муза
 * Date: 01.08.15
 * Time: 20:21
 */

class Categories extends CWidget{
    public function run(){
        $lang = Languages::model()->findByAttributes(array('lang'=>Yii::app()->language));
        $cats = Category::model()->findAll("lang_id = ".$lang->id);
        $this->render('categories',array(
            'cats'=>$cats
        ));
    }
} 