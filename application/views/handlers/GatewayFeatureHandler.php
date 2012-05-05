<?php

namespace views\handlers;

use models\shared\frontend\FeatureHandler;
use models\services\UserService;

require_once 'shared/frontend/FeatureHandler.php';
require_once 'services/UserService.php';

class GatewayFeatureHandler extends FeatureHandler {
    private $service;
    
    protected function init() {
        $this->service = new UserService();
    }
    
    // feature: show_name
    protected function showName() {
        $data = $this->service->getBaseInformation();
        return is_array($this->data)
            ? array_merge($data, $this->data)
            : $data;
    }
    
    // feature: show_contacts
    protected function showContacts() {
        return $this->service->getContactInformation();
    }

}