<?php

/* HTML5 button */

class SF5button extends SFFormInput {

	public static function getName() {
		return 'html5button';
    }
	public function getHtmlText() {
		$html = '<span style="color:red">Not implemented yet!</span>';
		return $html;
    }
	
	public static function getOtherPropTypesHandled() {
		return array('_str');
	}
}
    