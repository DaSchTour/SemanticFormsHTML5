<?php

/* HTML5 search */

class SF5search extends SFFormInput {

	public static function getName() {
		return 'html5search';
    }
	public function getHtmlText() {
		$html = '<span style="color:red">Not implemented yet!</span>';
		return $html;
    }
	
	public static function getOtherPropTypesHandled() {
		return array('_str');
	}
}
