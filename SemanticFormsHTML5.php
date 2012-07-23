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

/*
$HTML5inputs = array('button','checkbox','color','date','datetime','datetime-local','email','file','hidden','image','month','number','password','radio','range','reset','search','submit','tel','text','time','url','week' );

 * at first reduce to the working
 * */

$HTML5inputs = array('color');

$wgExtensionMessagesFiles['SemanticFormsHTML5'] = $dir . 'SemanticFormsHTML5.i18n.php';
$wgHooks['ParserFirstCallInit'][] = 'wfSF5Setup';

foreach ($HTML5inputs as $key => $value) {
	$wgAutoloadClasses['SF5'.$value] = $dir . 'includes/SF5'.$value.'.php';
}

function wfSF5Setup() {
        global $sfgFormPrinter, $wgVersion, $HTML5inputs;
 		foreach ($HTML5inputs as $key => $value) {
			$sfgFormPrinter->registerInputType('SF5'.$value);
		}
		return true;
}