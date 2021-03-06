<?php

/* HTML5 week */

class SF5week extends SFFormInput {

	public static function getName() {
		return 'html5-week';
    }
	public function getHtmlText() {
		$inputFieldDisabled = SF5Utils::checkDisabled();
		$html = SF5Utils::textHTML('week', $this->mCurrentValue, $this->mInputName, $inputFieldDisabled, $this->mOtherArgs, 'input_' . $this->mInputNumber);	
		return $html;
    }
	
	public static function getOtherPropTypesHandled() {
		return array('_dat');
	}
}
