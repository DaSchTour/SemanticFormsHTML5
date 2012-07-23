<?php

/* HTML5 number */

class SF5number extends SFFormInput {

	public static function getName() {
		return 'html5-number';
    }
	
	public static function getParameters() {
		$params = parent::getParameters();
		return $params;
	}
	
	public function getHtmlText() {
		$html = SF5Utils::textHTML('number', $this->mCurrentValue, $this->mInputName, $inputFieldDisabled, $this->mOtherArgs, 'input_' . $this->mInputNumber );	
		return $html;
	}
	
	public static function getOtherPropTypesHandled() {
		return array('_num');
	}
}
