<?php
namespace LivePerson\LiveEngage\Block;

use Magento\Framework\View\Element\Template;

class Snippet extends Template
{

    public function isEnabled()
    {
        $enabled = $this->_scopeConfig->getValue('liveperson_liveengage/settings/enabled', \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
        if (!$enabled) return false;

        if (!$this->enabledForRoute()) return false;

        if ($this->getAccountNum() == 0) return false;
        return true;
    }

    public function getAccountNum()
    {
        return $this->_scopeConfig->getValue('liveperson_liveengage/settings/accountnumber', \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
    }

    public function enabledForRoute() {
        $route = $this->getRequest()->getRouteName();
        $route_enabled = $this->_scopeConfig->getValue('liveperson_liveengage/settings/routes/'.$route, \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
        return $route_enabled;
    }
}