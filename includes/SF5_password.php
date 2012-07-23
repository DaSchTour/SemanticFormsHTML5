<?php

/* HTML5 password */

class SF5password extends SFFormInput {

	public static function getName() {
		return 'html5password';
    }
	public function getHtmlText() {
		$html = '<span style="color:red">Not implemented yet!</span>';
		return $html;
    }
	
	public static function getOtherPropTypesHandled() {
		return array('_str');
	}
}
