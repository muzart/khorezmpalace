<?php

/**
 * Created by PhpStorm.
 * User: Muzaffar
 * Date: 23.05.2016
 * Time: 11:49
 */
class BookingController extends Controller
{
    public function actionIndex(){

        $booking = new Booking;
//        if(isset($_POST['ajax']) && $_POST['ajax']==='booking-form')
//        {
//            echo CActiveForm::validate($booking);
//            Yii::app()->end();
//        }
        if($_POST["BookingForm"]){
            $booking->attributes = $_POST['BookingForm'];
            if($booking->save()){
                $message = $this->renderPartial('_email',array(
                    'booking'=>$booking
                ),true);
                if(SendMail::send('notify',Yii::app()->params['adminEmail'], 'Новый запрос' , $message, 'Новый запрос на резервацию')){
                    Yii::app()->user->setFlash('booking',Yii::t('main','Your request succesfully delivered'));
                }
                else
                    Yii::app()->user->setFlash('booking',Yii::t('main','Your request was unsuccesfull'));
            }
            else
            {
                var_dump($booking); exit;
            }
        }
        else{
            Yii::app()->user->setFlash('booking',Yii::t('main','Data is invalid'));
        }
        $this->redirect(Yii::app()->request->urlReferrer);
    }
}