<?php

/**
 * Created by PhpStorm.
 * User: Muzaffar
 * Date: 19.05.2016
 * Time: 19:27
 */
class Rooms extends CWidget
{
    public function run(){
        $lang = Languages::model()->findByAttributes(array('lang'=>Yii::app()->language));
        $rooms = RoomType::model()->findAllByAttributes(array(
            'lang_id'=>$lang->id,
        ),array('order'=>'weight ASC'));
        $this->render('rooms',array(
            'roomTypes'=>$rooms
        ));
    }
}