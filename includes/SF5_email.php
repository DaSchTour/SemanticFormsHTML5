<?php

/* HTML5 email */

class SF5email extends SFFormInput {

	public static function getName() {
		return 'html5-email';
    }
	
	public static function getParameters() {
		$params = parent::getParameters();
		return $params;
	}
	
	public function getHtmlText() {
		$html = SF5Utils::textHTML('email', $this->mCurrentValue, $this->mInputName, $inputFieldDisabled, $this->mOtherArgs, 'input_' . $this->mInputNumber );	
		return $html;
	}
	
	public static function getOtherPropTypesHandled() {
		return array('_num');
	}
}

