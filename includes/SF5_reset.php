<?php

/* HTML5 reset */

class SF5reset extends SFFormInput {

	public static function getName() {
		return 'html5-reset';
    }
	public function getHtmlText($cur_value, $input_name, $is_mandatory, $is_disabled, $other_args) {
		$html = '<span style="color:red">Not implemented yet!</span>';
		return $html;
    }
	
	public static function getOtherPropTypesHandled() {
		return array('_str');
	}
}
