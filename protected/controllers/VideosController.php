<?php

/**
 * Created by PhpStorm.
 * User: Muzaffar
 * Date: 02.06.2016
 * Time: 18:00
 */
class VideosController extends Controller
{
    public $layout = '/layouts/column1';

    public function actionIndex(){
        $dataProvider=new CActiveDataProvider('Video',array(
            'pagination'=>array(
                //Количество отзывов на страницу
                'pageSize'=>12,
                'pageVar'=>'page',
            ),
        ));
        $this->render('index',array(
            'dataProvider'=>$dataProvider,
        ));
    }
}