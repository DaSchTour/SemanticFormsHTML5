<?php

/* HTML5 month */

class SF5month extends SFFormInput {

	public static function getName() {
		return 'html5-month';
    }
	public function getHtmlText() {
		$inputFieldDisabled = SF5Utils::checkDisabled();
		$html = SF5Utils::textHTML('month', $this->mCurrentValue, $this->mInputName, $inputFieldDisabled, $this->mOtherArgs, 'input_' . $this->mInputNumber);	
		return $html;
    }
	
	public static function getOtherPropTypesHandled() {
		return array('_dat');
	}
}
