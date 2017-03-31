<?php

class AndersonAlves_SocialLinks_Model_SocialLinks extends Mage_Core_Model_Abstract{
	public function getSocialLinks(){
		$facebook = Mage::getStoreConfig('andersonalves_options/andersonalves_facebook/andersonalves_select',Mage::app()->getStore());
		$twitter = Mage::getStoreConfig('andersonalves_options/andersonalves_twitter/andersonalves_select',Mage::app()->getStore());
		$google = Mage::getStoreConfig('andersonalves_options/andersonalves_google/andersonalves_select',Mage::app()->getStore());
		$socialLinks = array($facebook, $twitter, $google);
		return $socialLinks;
	}
}