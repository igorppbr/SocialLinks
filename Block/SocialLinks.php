<?php

class AndersonAlves_SocialLinks_Block_SocialLinks extends Mage_Core_Block_Template{
	public function getSocialLinks(){
		$socialLinks = Mage::getModel("sociallinks/sociallinks")->getSocialLinks();
		return $sociallinks;
	}
}