<?php

/* HTML5 image */

class SF5image extends SFFormInput {

	public static function getName() {
		return 'html5image';
    }
	public function getHtmlText() {
		$html = '<span style="color:red">Not implemented yet!</span>';
		return $html;
    }
	
	public static function getOtherPropTypesHandled() {
		return array('_str');
	}
}

