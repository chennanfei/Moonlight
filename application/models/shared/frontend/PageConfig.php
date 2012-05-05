<?php

namespace models\shared\frontend;

abstract class PageConfig {
    protected $featureGroupList = null;
    
    public function __construct() {
    }
    
    static function createConfig($application) {
        assert(isset($application));
        
        $class = ucfirst($application) . 'PageConfig';
        $classFile = APPLICATION_PATH . '/views/page_config/'. $class . '.php';
        if (file_exists($classFile)) {
            require_once($classFile);
            
            $realClass = '\\views\\page_config\\' . $class;
            return new $realClass();
        } else {
            throw new \Exception("$classFile was not found.");
        }
    }
    
    final function getFeatureGroup($viewID) {
        assert(isset($viewID));
        assert(isset($this->featureGroupList));

        if (! array_key_exists($viewID, $this->featureGroupList)) {
            $this->log->addError('View ID ' . $viewID . ' was not found.');
            $viewID = 'Error';
        }
        return $this->featureGroupList[$viewID];
    }
}