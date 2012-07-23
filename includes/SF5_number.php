<?php

/* HTML5 number */

class SF5number extends SFFormInput {

	public static function getName() {
		return 'html5number';
    }
	
	public static function getParameters() {
		$params = parent::getParameters();
		return $params;
	}
	
	public function getHtmlText() {
		$html = <<<END
	<input id="$input_id" name="{$input_name}[value]" type="number" class="$className" tabindex="$sfgTabIndex" $checked_str $disabled_text/>
END;
		return $html;
	}
	
	public static function getOtherPropTypesHandled() {
		return array('_num');
	}
}
