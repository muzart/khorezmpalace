<?php
/**
 * Created by PhpStorm.
 * User: Муза
 * Date: 01.08.15
 * Time: 18:38
 */

class LanguageSwitcherWidget extends CWidget
{
    public function run()
    {
        $currentUrl = ltrim(Yii::app()->request->url, '/');
        $links = array();
        foreach (DMultilangHelper::suffixList() as $suffix => $name){
            $url = '/' . ($suffix ? trim($suffix, '_') . '/' : '') . $currentUrl;
            $links[] = CHtml::tag('li', array('class'=>$suffix,'style'=>'padding: 3px'), CHtml::link($name, $url));
        }
        echo CHtml::tag('ul', array('class'=>'inline-list to-left','style'=>'margin: 0'), implode("\n", $links));
    }
}