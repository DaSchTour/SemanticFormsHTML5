<?php

/* HTML5 url */

class SF5url extends SFFormInput {

	public static function getName() {
		return 'html5url';
    }
	
	public static function getParameters() {
		$params = parent::getParameters();
		return $params;
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
                                 'type'  => 'url'
                  );
		$html = Xml::element( 'input', $attribs );		
		return $html;
	}
	
	public static function getOtherPropTypesHandled() {
		return array('_url');
	}
}
