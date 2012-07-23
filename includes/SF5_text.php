<?php

/* HTML5 text */

class SF5text extends SFFormInput {

	public static function getName() {
		return 'html5text';
    }
	public function getHtmlText() {
		$html = '<span style="color:red">Not implemented yet!</span>';
		return $html;
    }
	
	public static function getOtherPropTypesHandled() {
		return array('_str');
	}
}
