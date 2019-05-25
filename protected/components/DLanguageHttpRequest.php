<?php
/**
 * Created by PhpStorm.
 * User: Муза
 * Date: 01.08.15
 * Time: 18:34
 */

class DLanguageHttpRequest extends CHttpRequest
{
    private $_requestUri;

    public function getRequestUri()
    {
        if ($this->_requestUri === null)
            $this->_requestUri = DMultilangHelper::processLangInUrl(parent::getRequestUri());

        return $this->_requestUri;
    }

    public function getOriginalUrl()
    {
        return $this->getOriginalRequestUri();
    }

    public function getOriginalRequestUri()
    {
        return DMultilangHelper::addLangToUrl($this->getRequestUri());
    }
}