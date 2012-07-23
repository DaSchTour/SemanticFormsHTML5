<?php

/* HTML5 week */

class SF5week extends SFFormInput {

	public static function getName() {
		return 'html5week';
    }
	public function getHtmlText() {
		$html = '<span style="color:red">Not implemented yet!</span>';
		return $html;
    }
	
	public static function getOtherPropTypesHandled() {
		return array('_str');
	}
}
