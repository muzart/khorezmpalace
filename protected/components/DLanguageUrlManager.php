<?php
/**
 * Created by PhpStorm.
 * User: Муза
 * Date: 01.08.15
 * Time: 18:34
 */

class DLanguageUrlManager extends CUrlManager
{
    public function createUrl($route, $params=array(), $ampersand='&')
    {
        $url = parent::createUrl($route, $params, $ampersand);
        return DMultilangHelper::addLangToUrl($url);
    }
}