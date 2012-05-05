<?php

namespace models\shared\frontend;

use models\shared\frontend\PageConfig;

require_once 'shared/frontend/PageConfig.php';

class PageRenderingHandler {
    private static $_featureHandlerUrl = 'http://localhost/Moonlight/public/framework/index';

    private static $_handleOptions = array(
	CURLOPT_AUTOREFERER => 1,
	CURLOPT_HEADER => 0,
	CURLOPT_MAXREDIRS => 3,
	CURLOPT_POST => 0,
	CURLOPT_RETURNTRANSFER => 1,
	CURLOPT_USERAGENT => 'UCD_PARALLEL_WORKDER',
    );
    
    static function dispatch($args) {
        assert(is_array($args));

        $smarty = \Zend_Registry::get('smarty');
        $application = $args['application'];
        $viewID = $args['viewID'];

        $featureGroup = PageConfig::createConfig($application)->getFeatureGroup($viewID);
        assert(is_array($featureGroup));

        $args['featureGroup'] = $featureGroup;
        $contents = self::handleFeatures($args); 
        foreach ($contents as $key => $content) {
            $smarty->assign($key, $content);
        }

        $template = $application . '/page-layout.tpl';
        $smarty->display($template);
    }
    
    private static function handleFeatures($args) {
        $application = $args['application'];
        assert(isset($application));

        $mh = curl_multi_init();
        $handlers = array();
        $options = self::$_handleOptions;
        $urlArgs = "application={$application}";

        $data = $args['data'];
        if (!empty($data)) {
            assert(is_array($data));
            $urlArgs .= '&data=' . serialize($args['data']);
        }
        
        foreach ($args['featureGroup'] as $feature) {
            $urlArgs .= "&feature={$feature}";
            
            $options[CURLOPT_POSTFIELDS] = $urlArgs;

            $ch = curl_init(self::$_featureHandlerUrl);
            curl_setopt_array($ch, $options);
            curl_multi_add_handle($mh, $ch);
            $handlers[$feature] = $ch;
            
            unset($options[CURLOPT_POSTFIELDS]);
        }
        
        $running = null;
		do {
		    curl_multi_exec($mh, $running);
		} while($running > 0);
		
		$contents = array();
		foreach ($handlers as $ft => $ch) {
		    $contents[$ft] = curl_multi_getcontent($ch);
		    curl_multi_remove_handle($mh, $ch);
		}
		curl_multi_close($mh);

		return $contents;
    }
}