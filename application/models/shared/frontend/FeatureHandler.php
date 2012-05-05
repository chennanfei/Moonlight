<?php

namespace models\shared\frontend;

abstract class FeatureHandler {
    const DELIMITER_PATTER = '_';
    protected $application;
    protected $data;
    protected $feature;
    private $smarty;
    
    private function __construct($application, $data, $feature) {
        $this->application = $application;
        $this->feature = $feature;
        $this->smarty = \Zend_Registry::get('smarty');
        if (isset($data)) {
            $this->data = unserialize($data);
        }
        
        $this->init();
    }
    
    protected function init() {}
    
    static function createHandler(array $args) {
        $application = $args['application'];
        assert(isset($application));

        $feature = $args['feature'];
        assert(isset($feature));
        
        $class = ucfirst($application) . 'FeatureHandler';
        $classFile = APPLICATION_PATH . '/views/handlers/' . $class . '.php';
        if (file_exists($classFile)) {
            require_once($classFile);
            
            $realClass = '\\views\\handlers\\' . $class;
            return new $realClass($application, $args['data'], $feature);
        } else {
            throw new \Exception("$classFile was not found.");
        }
    }
    
    final function execute() {
        assert(isset($this->feature));

        $method = lcfirst(ucwords($this->feature));
        $method = str_replace(self::DELIMITER_PATTER, '', $method);
        
        if (! method_exists($this, $method)) {
            throw new \Exception("Method $method for feature {$this->feature} was not found");
        }

        $data = $this->$method($this->data);
        if (is_array($data)) {
            foreach ($data as $key => $value) {
                $this->smarty->assign($key, $value);
            }
        }

        $filename = $this->application . '/features/' . $this->feature . '.tpl';
        $this->smarty->display($filename);
    }
}