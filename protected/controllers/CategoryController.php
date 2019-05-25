<?php
/**
 * Created by PhpStorm.
 * User: Муза
 * Date: 31.07.15
 * Time: 11:21
 */

class CategoryController extends Controller{

    public $layout = '/layouts/column2';

    public function actionIndex(){
        $this->render('view');
    }

    public function actionView($hash){
        $cat = Category::model()->findByAttributes(array('hash'=>$hash));
        if($cat){
            $this->render('view',array(
                'category'=>$cat,
                'contents'=>$cat->contents
            ));
        }
        else throw new CHttpException(404,Yii::t('category','There is no contents with such category'));
    }
} 