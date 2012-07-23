<?php

/* HTML5 submit */

class SF5submit extends SFFormInput {

	public static function getName() {
		return 'html5submit';
    }
	public function getHtmlText() {
		$html = '<span style="color:red">Not implemented yet!</span>';
		return $html;
    }
	
	public static function getOtherPropTypesHandled() {
		return array('_str');
	}
}

