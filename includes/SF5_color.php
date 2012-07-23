<?php

/* HTML5 color */

class SF5color extends SFFormInput {

	public static function getName() {
		return 'html5color';
    }
	
	public static function getParameters() {
		$params = parent::getParameters();
		return $params;
	}
	
	public function getHtmlText() {
		$html = <<<END
	<input id="$input_id" name="{$input_name}[value]" type="color" class="$className" tabindex="$sfgTabIndex" $checked_str $disabled_text/>
END;
		return $html;
	}
	
	public static function getOtherPropTypesHandled() {
		return array('_str');
	}
}
