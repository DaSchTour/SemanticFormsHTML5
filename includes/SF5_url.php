<?php

/* HTML5 url */

class SF5url extends SFFormInput {

	public static function getName() {
		return 'html5-url';
    }
	
	public static function getParameters() {
		$params = parent::getParameters();
		return $params;
	}
	
	public function getHtmlText() {
		$html = SF5Utils::textHTML('url', $this->mCurrentValue, $this->mInputName, $inputFieldDisabled, $this->mOtherArgs, 'input_' . $this->mInputNumber);	
		return $html;
	}
	
	public static function getOtherPropTypesHandled() {
		return array('_url');
	}
}
