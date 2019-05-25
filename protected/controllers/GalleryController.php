<?php

/**
 * Created by PhpStorm.
 * User: Muzaffar
 * Date: 20.05.2016
 * Time: 9:41
 */
class GalleryController extends Controller
{
    public $layout = "//layouts/column1";
    public function actionIndex(){
        $galleries = Gallery::model()->findAll();
        $dataProvider=new CActiveDataProvider('GalleryImages',array(
            'pagination'=>array(
                //Количество отзывов на страницу
                'pageSize'=>12,
                'pageVar'=>'page',
            ),
        ));
        $this->render('index',array(
            'dataProvider'=>$dataProvider,
            'galleries'=>$galleries,
        ));
    }
}