<?php

/* HTML5 reset */

class SF5reset extends SFFormInput {

	public static function getName() {
		return 'html5reset';
    }
	public function getHtmlText() {
		$html = '<span style="color:red">Not implemented yet!</span>';
		return $html;
    }
	
	public static function getOtherPropTypesHandled() {
		return array('_str');
	}
}
