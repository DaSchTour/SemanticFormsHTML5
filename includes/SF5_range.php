<?php

/* HTML5 range */

class SF5range extends SFFormInput {

	public static function getName() {
		return 'html5range';
    }
	public function getHtmlText() {
		$html = '<span style="color:red">Not implemented yet!</span>';
		return $html;
    }
	
	public static function getOtherPropTypesHandled() {
		return array('_str');
	}
}
