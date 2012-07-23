<?php

/* HTML5 checkbox */

class SF5checkbox extends SFFormInput {

	public static function getName() {
		return 'html5-checkbox';
    }
	public function getHtmlText() {
		$html = '<span style="color:red">Not implemented yet!</span>';
		return $html;
    }
	
	public static function getOtherPropTypesHandled() {
		return array('_str');
	}
}
    
