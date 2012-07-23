<?php

/* HTML5 file */

class SF5file extends SFFormInput {

	public static function getName() {
		return 'html5file';
    }
	public function getHtmlText() {
		$html = '<span style="color:red">Not implemented yet!</span>';
		return $html;
    }
	
	public static function getOtherPropTypesHandled() {
		return array('_str');
	}
}
