<?php

/**
 * Created by PhpStorm.
 * User: Muzaffar
 * Date: 19.05.2016
 * Time: 19:23
 */
class WSlider extends CWidget
{
    public function run(){
        $sliders = Slider::model()->findAll();
        $this->render('slider',array(
            'sliders' => $sliders
        ));
    }
}