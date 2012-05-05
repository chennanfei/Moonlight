<?php

use models\shared\frontend\FeatureHandler;

require_once 'shared/frontend/FeatureHandler.php';

class FrameworkController extends Zend_Controller_Action {
    
    function indexAction() {
        try {
            $handler = FeatureHandler::createHandler($this->getRequest()->getParams());
            $handler->execute();
        } catch (Exception $e) {
            
        }
        exit;
    }

}