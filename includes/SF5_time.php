<?php

/* HTML5 time */

class SF5time extends SFFormInput {

	public static function getName() {
		return 'html5time';
    }
	public function getHtmlText() {
		$html = '<span style="color:red">Not implemented yet!</span>';
		return $html;
    }
	
	public static function getOtherPropTypesHandled() {
		return array('_str');
	}
}

