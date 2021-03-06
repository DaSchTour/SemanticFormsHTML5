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


$HTML5inputs = array('color','date','datetime','datetime_local','email','month','number','range','search','tel','time','url','week' );

$wgExtensionMessagesFiles['SemanticFormsHTML5'] = $dir . 'SemanticFormsHTML5.i18n.php';
$wgHooks['ParserFirstCallInit'][] = 'wfSF5Setup';

$wgAutoloadClasses['SF5Utils'] = $dir . 'includes/SF5_Utils.php';

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