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

global $sfgFormPrinter;
$sfgFormPrinter->setInputTypeHook('html5', 'sfHtml5', array());

function sfHtml5($cur_value, $input_name, $is_mandatory, $is_disabled, $other_args) {
		global $sfgTabIndex, $sfgFieldNum, $sfgShowOnSelect;

		if ( array_key_exists( 'class', $other_args ) ) {
			$className .= ' ' . $other_args['class'];
		}
		$input_id = "input_$sfgFieldNum";
		$disabled_text = ( $is_disabled ) ? 'disabled' : '';
		$html5input=$field_args['html5'];
		$html = <<<END
	<input id="$input_id" name="{$input_name}[value]" type="$html5input" class="$className" tabindex="$sfgTabIndex" $checked_str $disabled_text/>
END;
		return $html;
	}
