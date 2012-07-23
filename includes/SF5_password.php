<?php

/* HTML5 password */

class SF5password extends SFFormInput {

	public static function getName() {
		return 'html5-password';
    }
	public function getHtmlText($cur_value, $input_name, $is_mandatory, $is_disabled, $other_args) {
		$html = '<span style="color:red">Not implemented yet!</span>';
		return $html;
    }
	
	public static function getOtherPropTypesHandled() {
		return array('_str');
	}
}
