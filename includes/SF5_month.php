<?php

/* HTML5 month */

class SF5month extends SFFormInput {

	public static function getName() {
		return 'html5month';
    }
	public function getHtmlText() {
		$html = '<span style="color:red">Not implemented yet!</span>';
		return $html;
    }
	
	public static function getOtherPropTypesHandled() {
		return array('_str');
	}
}
