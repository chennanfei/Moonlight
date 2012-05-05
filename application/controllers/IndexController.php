<?php

use models\shared\frontend\PageRenderingHandler;
use models\services\UserService;

require_once 'shared/frontend/PageRender.php';
require_once 'services/UserService.php';

class IndexController extends \Zend_Controller_Action {
    public function indexAction() {
        $service = new UserService();
        $smarty = \Zend_Registry::get('smarty');
        
        $smarty->assign('userID', $service->getID());

        $baseInfo = $service->getBaseInformation();
        foreach ($baseInfo as $key => $value) {
            $smarty->assign($key, $value);
        }

        $contacts = $service->getContactInformation();
        foreach ($contacts as $key => $value) {
            $smarty->assign($key, $value);
        }
        $smarty->display('gateway/gateway.tpl');
    }
    
    public function moonAction() {
        $service = new UserService();
        
        PageRenderingHandler::dispatch(array(
            'application' => 'gateway',
            'data' => array('userID' => $service->getID()),
            'viewID' => 'Glance'
        ));
    }
    
}

