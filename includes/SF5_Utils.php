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
				 
		if ( array_key_exists( 'max', $otherArgs ) ) {
                         $attribs['max'] = $otherArgs['max'];
        }
		
		if ( array_key_exists( 'min', $otherArgs ) ) {
                         $attribs['min'] = $otherArgs['min'];
        }
		
		if ( array_key_exists( 'step', $otherArgs ) ) {
                         $attribs['step'] = $otherArgs['step'];
        }
	
		$html = Xml::element( 'input', $attribs );
		
		 return $html;
	}
	
	static function checkDisabled () {
/*		$inputFieldDisabled =
                          array_key_exists( 'disable input field', $this->mOtherArgs )
                          || ( !array_key_exists( 'enable input field', $this->mOtherArgs ) )
                          || $this->mIsDisabled   ; */
        $inputFieldDisabled = '';
		return $inputFieldDisabled;
	}
}
