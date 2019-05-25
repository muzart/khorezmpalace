<?php
/**
 * Created by PhpStorm.
 * User: Муза
 * Date: 07.08.15
 * Time: 21:11
 */

class Megamenu extends CWidget{
    public function run(){
        $lang = Yii::app()->language;
        $language = Languages::model()->findByAttributes(array('lang'=>$lang));
        $menu = Menu::model()->findByPk($language->id);
        $items = Menuitem::model()->findAllByAttributes(array(
            'menu_id'=>$menu->id,
            'parent_id'=>0
        ));
        $this->render('megamenu',array(
            'items'=>$items
        ));
    }
} 