<?php
define( 'SF5_VERSION', '0.1' );
// register extension
$wgExtensionCredits[ 'semantic' ][] = array(
         'path' => __FILE__,
         'name' => 'Semantic Forms HTML5',
         'author' => '[http://www.dasch-tour.org/ DaSch]',
         'url' => 'https://www.mediawiki.org/wiki/Extension:Semantic_Forms_HTML5',
         'descriptionmsg' => 'semanticformshtml5-desc',
         'version' => SF5_VERSION,
);

$dir = dirname( __FILE__ ) . '/';


$HTML5inputs = array('button','checkbox','color','date','datetime','datetime_local','email','file','hidden','image','month','number','password','radio','range','reset','search','submit','tel','text','time','url','week' );

$wgExtensionMessagesFiles['SemanticFormsHTML5'] = $dir . 'SemanticFormsHTML5.i18n.php';
$wgHooks['ParserFirstCallInit'][] = 'wfSF5Setup';

/*
foreach ($HTML5inputs as $key => $value) {
	$wgAutoloadClasses['SF5'.$value] = $dir . 'includes/SF5_'.$value.'.php';
}

function wfSF5Setup() {
        global $sfgFormPrinter, $wgVersion, $HTML5inputs;
 		foreach ($HTML5inputs as $key => $value) {
			$sfgFormPrinter->registerInputType('SF5'.$value);
		}
		return true;
}
 * */
 
global $sfgFormPrinter;
foreach ($HTML5inputs as $key => $value) {
	$sfgFormPrinter->setInputTypeHook('html5'.$key, 'sfHtml5'.$key, array());
}

function sfHtml5color($cur_value, $input_name, $is_mandatory, $is_disabled, $other_args) {
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
function sfHtml5number($cur_value, $input_name, $is_mandatory, $is_disabled, $other_args) {
		global $sfgTabIndex, $sfgFieldNum, $sfgShowOnSelect;

		if ( array_key_exists( 'class', $other_args ) ) {
			$className .= ' ' . $other_args['class'];
		}
		$input_id = "input_$sfgFieldNum";
		$disabled_text = ( $is_disabled ) ? 'disabled' : '';
		$html = <<<END
	<input id="$input_id" name="{$input_name}[value]" type="number" class="$className" tabindex="$sfgTabIndex" $checked_str $disabled_text/>
END;
		return $html;
	}
function sfHtml5email($cur_value, $input_name, $is_mandatory, $is_disabled, $other_args) {
		global $sfgTabIndex, $sfgFieldNum, $sfgShowOnSelect;

		if ( array_key_exists( 'class', $other_args ) ) {
			$className .= ' ' . $other_args['class'];
		}
		$input_id = "input_$sfgFieldNum";
		$disabled_text = ( $is_disabled ) ? 'disabled' : '';
		$html = <<<END
	<input id="$input_id" name="{$input_name}[value]" type="email" class="$className" tabindex="$sfgTabIndex" $checked_str $disabled_text/>
END;
		return $html;
	}
