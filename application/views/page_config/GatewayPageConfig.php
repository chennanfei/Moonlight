<?php

namespace views\page_config;

use models\shared\frontend\PageConfig;

require_once 'shared/frontend/PageConfig.php';

class GatewayPageConfig extends PageConfig {
    protected $featureGroupList = array(
        'Glance' => array('show_name', 'show_contacts'),
        'Error' => array('error_message')
    );
}