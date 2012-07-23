<?php

class SF5Utils {
	static function textHTML ( $html5type, $currentValue, $inputName, $isDisabled, $otherArgs, $inputId = null, $tabIndex = null, $class = '' ) {
		global $sfgTabIndex;
 
                 // array of attributes to pass to the input field
                 $attribs = array(
                                 'name'  => $inputName,
                                 'class' => $class,
                                 'value' => $currentValue,
                                 'type'  => $html5type
                 );
		$html = Xml::element( 'input', $attribs );
		
		 return $html;
	}
	
	static function checkDisabled () {
		$inputFieldDisabled =
                          array_key_exists( 'disable input field', $this->mOtherArgs )
                          || ( !array_key_exists( 'enable input field', $this->mOtherArgs ) )
                          || $this->mIsDisabled   ;
		return $inputFieldDisabled;
	}
}
