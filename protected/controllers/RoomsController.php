<?php

/**
 * Created by PhpStorm.
 * User: Muzaffar
 * Date: 20.05.2016
 * Time: 9:41
 */
class RoomsController extends Controller
{
    public $layout = "//layouts/column1";
    /**
     * Declares class-based actions.
     */
    public function actions()
    {
        return array(
            // captcha action renders the CAPTCHA image displayed on the contact page
            'captcha'=>array(
                'class'=>'CCaptchaAction',
                'backColor'=>0xffffff,
                'testLimit'=>1,
                'foreColor'=>0x347744
            ),
        );
    }
    public function actionIndex(){
        $lang = Yii::app()->language;
        $lang = Languages::model()->findByAttributes(array('lang'=>$lang));
        $room_types = RoomType::model()->findAllByAttributes(array('lang_id'=>$lang->id),array('order'=>'id DESC'));
        $this->render('index',array(
            'room_types'=>$room_types,
        ));
    }

    public function actionView($hash){
        $room_type = RoomType::model()->findByAttributes(array('hash'=>$hash));
        $this->render('view', array(
            'room_type'=>$room_type
        ));
    }
}