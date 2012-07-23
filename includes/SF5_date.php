<?php

/* HTML5 date */

class SF5date extends SFFormInput {

	public static function getName() {
		return 'html5-date';
    }
	public function getHtmlText() {
		$html = '<span style="color:red">Not implemented yet!</span>';
		return $html;
    }
	
	public static function getOtherPropTypesHandled() {
		return array('_str');
	}
}
  
