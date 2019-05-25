<?php

/**
 * Created by PhpStorm.
 * User: Muzaffar
 * Date: 19.05.2016
 * Time: 19:25
 */
class Facilities extends CWidget
{
    public function run(){
        $lang = Languages::model()->findByAttributes(array('lang'=>Yii::app()->language));
        $services = Services::model()->findAllByAttributes(array('lang_id'=>$lang->id));
        $this->render('facilities',array(
            'services'=>$services
        ));
    }
}