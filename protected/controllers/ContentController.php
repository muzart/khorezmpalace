<?php
/**
 * Created by PhpStorm.
 * User: Муза
 * Date: 31.07.15
 * Time: 11:21
 */

class ContentController extends Controller{

    public $layout = "/layouts/column1";

    public function actionView($hash){
        $lang = Yii::app()->language;
        $lang = Languages::model()->findByAttributes(array('lang'=>$lang));
        $lang_id = $lang->id;
        $text = Content::model()->findByAttributes(array('hash'=>$hash,'lang_id'=>$lang_id));
        if($text !== null)
            $this->render('view',array(
                'text'=>$text
            ));
        else
            throw new CHttpException(404,'No content available');
    }

} 