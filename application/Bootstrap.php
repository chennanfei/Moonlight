<?php

require_once 'Zend/Registry.php';
require_once 'Zend/Controller/Front.php';
require_once 'smarty/SmartyBC.class.php';

class Bootstrap extends Zend_Application_Bootstrap_Bootstrap {
    
    protected function _initFront() {
        Zend_Controller_Front::getInstance()->setParam('noViewRenderer', true);
    }

    protected function _initSmarty() {
        function smarty_block_dynamic($param, $content, &$views) {  
            return $content;  
        }
    
        $smarty = new SmartyBC();
        $smarty->left_delimiter = "{";
        $smarty->right_delimiter = "}";  
        $smarty->compile_dir = APPLICATION_PATH . '/views/templates_c';  
        $smarty->cache_dir = APPLICATION_PATH . '/views/templates_c/cache_c';  
        $smarty->template_dir = APPLICATION_PATH . '/views/templates';
        $smarty->register_block('dynamic', 'smarty_block_dynamic');  
        Zend_Registry::set('smarty', $smarty);
    }
}

