<?php

/* HTML5 range */

class SF5range extends SFFormInput {

	public static function getName() {
		return 'html5-range';
    }
	public function getHtmlText() {
		$html = SF5Utils::textHTML('range', $this->mCurrentValue, $this->mInputName, $inputFieldDisabled, $this->mOtherArgs, 'input_' . $this->mInputNumber );	
		return $html;
    }
	
	public static function getOtherPropTypesHandled() {
		return array('_num');
	}
}
