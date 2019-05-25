<?php
/**
 * Created by PhpStorm.
 * User: Муза
 * Date: 29.07.15
 * Time: 13:47
 */

class Header extends CWidget{

    public function run(){
        $lang = Yii::app()->language;
        $language = Languages::model()->findByAttributes(array('lang'=>$lang));
        $menu = Menu::model()->findByPk($language->id);
        $items = Menuitem::model()->findAllByAttributes(array(
            'menu_id'=>$menu->id,
            'parent_id'=>0
        ));
        $this->render('header',array(
            'items'=>$items
        ));
    }
} 