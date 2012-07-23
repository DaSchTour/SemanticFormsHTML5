<?php

/* HTML5 tel */

class SF5tel extends SFFormInput {

	public static function getName() {
		return 'html5tel';
    }
	public function getHtmlText() {
		$html = '<span style="color:red">Not implemented yet!</span>';
		return $html;
    }
	
	public static function getOtherPropTypesHandled() {
		return array('_str');
	}
}
