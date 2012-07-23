<?php

/* HTML5 url */

class SF5url extends SFFormInput {

	public static function getName() {
		return 'html5url';
    }
	
	public static function getParameters() {
		$params = parent::getParameters();
		return $params;
	}
	
	public function getHtmlText() {
		$html = <<<END
	<input id="$input_id" name="{$input_name}[value]" type="url" class="$className" tabindex="$sfgTabIndex" $checked_str $disabled_text/>
END;
		return $html;
	}
	
	public static function getOtherPropTypesHandled() {
		return array('url');
	}
}
