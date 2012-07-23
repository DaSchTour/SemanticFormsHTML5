<?php

class SF5Utils {
	static function textHTML ( $currentValue, $inputName, $isDisabled, $otherArgs, $inputId = null, $tabIndex = null, $class = '', $html5type ) {
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
}
