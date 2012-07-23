<?php

/* HTML5 color */

class SF5color extends SFFormInput {

	public static function getName() {
		return 'html5-color';
    }
	
	public static function getParameters() {
		$params = parent::getParameters();
		return $params;
	}
	
	public function getHtmlText($cur_value, $input_name, $is_mandatory, $is_disabled, $other_args) {
		global $sfgTabIndex, $sfgFieldNum, $sfgShowOnSelect;

		if ( array_key_exists( 'class', $other_args ) ) {
			$className .= ' ' . $other_args['class'];
		}
		$input_id = "input_$sfgFieldNum";
		$disabled_text = ( $is_disabled ) ? 'disabled' : '';
		$html = <<<END
	<input id="$input_id" name="{$input_name}[value]" type="color" class="$className" tabindex="$sfgTabIndex" $checked_str $disabled_text/>
END;
		return $html;
	}
	
	public static function getOtherPropTypesHandled() {
		return array('_str');
	}
}
