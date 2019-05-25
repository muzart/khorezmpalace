<?php
/**
 * Created by PhpStorm.
 * User: Муза
 * Date: 31.07.15
 * Time: 11:38
 */

class ServicesController extends Controller{

    public function actionIndex(){
        $lang = Yii::app()->language;
        $lang = Languages::model()->findByAttributes(array(
            'lang'=>$lang
        ));
        $services = Services::model()->findAllByAttributes(array(
            'lang_id' => $lang->id
        ));
        $this->render('index',array(
            'services'=>$services
        ));
    }

} 