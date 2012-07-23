<?php

/* HTML5 color */

class SF5color extends SFFormInput {

	public static function getName() {
		return 'html5-color';
    }
	
	public static function getParameters() {
		$params = parent::getParameters();
		return $params;
	}
	
	public function getHtmlText() {
		$inputFieldDisabled = SF5Utils::checkDisabled();
		$html = SF5Utils::textHTML('color', $this->mCurrentValue, $this->mInputName, $inputFieldDisabled, $this->mOtherArgs, 'input_' . $this->mInputNumber);	
		return $html;
	}
	
	public static function getOtherPropTypesHandled() {
		return array('_str');
	}
}
