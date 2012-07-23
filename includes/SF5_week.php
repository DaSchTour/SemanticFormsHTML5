<?php

/* HTML5 week */

class SF5week extends SFFormInput {

	public static function getName() {
		return 'html5week';
    }
	public function getHtmlText() {
		$html = SF5Utils::textHTML( $this->mCurrentValue, $this->mInputName, $inputFieldDisabled, $this->mOtherArgs, 'input_' . $this->mInputNumber, 'week' );	
		return $html;
    }
	
	public static function getOtherPropTypesHandled() {
		return array('_dat');
	}
}
