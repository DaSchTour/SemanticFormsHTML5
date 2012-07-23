<?php

/* HTML5 hidden */

class SF5hidden extends SFFormInput {

	public static function getName() {
		return 'html5hidden';
    }
	public function getHtmlText() {
		$html = '<span style="color:red">Not implemented yet!</span>';
		return $html;
    }
	
	public static function getOtherPropTypesHandled() {
		return array('_str');
	}
}
