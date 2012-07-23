<?php

/* HTML5 datetime-local */

class SF5datetime_local extends SFFormInput {

	public static function getName() {
		return 'html5datetime-local';
    }
	public function getHtmlText() {
		$html = '<span style="color:red">Not implemented yet!</span>';
		return $html;
    }
	
	public static function getOtherPropTypesHandled() {
		return array('_str');
	}
}
