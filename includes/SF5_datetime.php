<?php

/* HTML5 datetime */

class SF5datetime extends SFFormInput {

	public static function getName() {
		return 'html5datetime';
    }
	public function getHtmlText() {
		$html = '<span style="color:red">Not implemented yet!</span>';
		return $html;
    }
	
	public static function getOtherPropTypesHandled() {
		return array('_str');
	}
}
