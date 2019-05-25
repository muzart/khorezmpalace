<?php

/**
 * Created by PhpStorm.
 * User: Muzaffar
 * Date: 23.05.2016
 * Time: 12:19
 */
class BookingForm extends CFormModel
{
    public $your_name;
    public $email;
    public $childs;
    public $adults;
    public $check_in;
    public $check_out;
    public $check_in_time;
    public $check_out_time;
    public $rooms;
    public $room_type;
    public $verifyCode;

    public function rules()
    {
        return array(
            // fields are required
            array('your_name, email, check_in, check_out, check_in_time, check_out_time, rooms, room_type', 'required'),
            array('verifyCode', 'captcha', 'allowEmpty'=>!CCaptcha::checkRequirements()),
        );
    }

    public function sendEmail($message){
        SendMail::send(Yii::app()->params['adminEmail'], $message, 'New Reservation');
    }


}