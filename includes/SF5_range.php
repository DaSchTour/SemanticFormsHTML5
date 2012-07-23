<?php

/* HTML5 range */

class SF5range extends SFFormInput {

	public static function getName() {
		return 'html5-range';
    }
	public function getHtmlText() {
		$inputFieldDisabled =
                         array_key_exists( 'disable input field', $this->mOtherArgs )
                         || ( !array_key_exists( 'enable input field', $this->mOtherArgs ) )
                         || $this->mIsDisabled   ;
		
		$attribs = array(
                                 'name'  => $inputName,
                                 'class' => $class,
                                 'value' => $currentValue,
                                 'type'  => 'range'
                  );
		$html = Xml::element( 'input', $attribs );		
		return $html;
    }
	
	public static function getOtherPropTypesHandled() {
		return array('_num');
	}
}
