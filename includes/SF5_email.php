<?php

/* HTML5 email */

class SF5email extends SFFormInput {

	public static function getName() {
		return 'html5-email';
    }
	
	public static function getParameters() {
		$params = parent::getParameters();
		return $params;
	}
	
	public function getHtmlText($cur_value, $input_name, $is_mandatory, $is_disabled, $other_args) {
		$inputFieldDisabled =
                         array_key_exists( 'disable input field', $this->mOtherArgs )
                         || ( !array_key_exists( 'enable input field', $this->mOtherArgs ) )
                         || $this->mIsDisabled   ;
		
		$attribs = array(
                                 'name'  => $inputName,
                                 'class' => $class,
                                 'value' => $currentValue,
                                 'type'  => 'email'
                  );
		$html = Xml::element( 'input', $attribs );		
		return $html;
	}
	
	public static function getOtherPropTypesHandled() {
		return array('_num');
	}
}

