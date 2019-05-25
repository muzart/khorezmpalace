<?php

/**
 * Created by PhpStorm.
 * User: Muzaffar
 * Date: 19.05.2016
 * Time: 19:24
 */
class Reservation extends CWidget
{
    public $roomType = null;
    public function run(){
        $lang = Languages::model()->findByAttributes(array('lang'=>Yii::app()->language));
        $room_types = RoomType::model()->findAllByAttributes(array(
            'lang_id' => $lang->id,
        ));
        $model = new BookingForm;
        $this->render('reservation',array(
            'room_types' => $room_types,
            'model'=>$model,
            'roomType' => $this->roomType
        ));
    }
}