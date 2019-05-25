<?php
/**
 * Created by PhpStorm.
 * User: Муза
 * Date: 03.08.15
 * Time: 9:47
 */

class Navbar extends CWidget{

    public function run(){
        $lang = Yii::app()->language;
        $language = Languages::model()->findByAttributes(array('lang'=>$lang));
        $menu = Menu::model()->findByPk($language->id);
        $items = Menuitem::model()->findAllByAttributes(array(
            'menu_id'=>$menu->id,
            'parent_id'=>0
        ));
        $this->render('navbar',array(
            'items'=>$items
        ));
    }
} 