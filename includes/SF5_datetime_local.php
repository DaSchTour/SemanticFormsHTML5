<?php

/* HTML5 datetime-local */

class SF5datetime_local extends SFFormInput {

	public static function getName() {
		return 'html5-datetime-local';
    }
	public function getHtmlText() {
		$inputFieldDisabled = SF5Utils::checkDisabled();
		$html = SF5Utils::textHTML('datetime-local', $this->mCurrentValue, $this->mInputName, $inputFieldDisabled, $this->mOtherArgs, 'input_' . $this->mInputNumber );	
		return $html;
    }
	
	public static function getOtherPropTypesHandled() {
		return array('_str');
	}
}
