<?php

/* HTML5 date */

class SF5date extends SFFormInput {

	public static function getName() {
		return 'html5-date';
    }
	public function getHtmlText() {
		$inputFieldDisabled = SF5Utils::checkDisabled();
		$html = SF5Utils::textHTML('date', $this->mCurrentValue, $this->mInputName, $inputFieldDisabled, $this->mOtherArgs, 'input_' . $this->mInputNumber );	
		return $html;
    }
	
	public static function getOtherPropTypesHandled() {
		return array('_str');
	}
}
  
