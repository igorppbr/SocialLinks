<?php

class AndersonAlves_SocialLinks_Block_SocialLinks extends Mage_Core_Block_Template{

    protected $_helper;

    public function __construct()
    {
        $this->_helper = Mage::helper('sociallinks');
    }

    public function getHtml(){

        $html = '<div class="social-links-share">';

        if($this->_helper->isFacebookEnabled()){
            //Include facebook div
        }

        if($this->_helper->isTwitterEnabled()){
            //Include twitter div
        }

        if($this->_helper->isGoogleEnabled()){
            //Include google div
        }

        $html.+'</div>';

        return $html;

    }


}