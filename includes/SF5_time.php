<?php

/* HTML5 time */

class SF5time extends SFFormInput {

	public static function getName() {
		return 'html5-time';
    }
	public function getHtmlText() {
		$inputFieldDisabled = SF5Utils::checkDisabled();
		$html = SF5Utils::textHTML('time', $this->mCurrentValue, $this->mInputName, $inputFieldDisabled, $this->mOtherArgs, 'input_' . $this->mInputNumber );	
		return $html;
    }
	
	public static function getOtherPropTypesHandled() {
		return array('_str');
	}
}

