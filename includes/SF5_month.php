<?php

/* HTML5 month */

class SF5month extends SFFormInput {

	public static function getName() {
		return 'html5-month';
    }
	public function getHtmlText() {
		$html = SF5Utils::textHTML( $this->mCurrentValue, $this->mInputName, $inputFieldDisabled, $this->mOtherArgs, 'input_' . $this->mInputNumber, 'month' );	
		return $html;
    }
	
	public static function getOtherPropTypesHandled() {
		return array('_dat');
	}
}
