<?php

/* HTML5 radio */

class SF5radio extends SFFormInput {

	public static function getName() {
		return 'html5radio';
    }
	public function getHtmlText() {
		$html = '<span style="color:red">Not implemented yet!</span>';
		return $html;
    }
	
	public static function getOtherPropTypesHandled() {
		return array('_str');
	}
}
