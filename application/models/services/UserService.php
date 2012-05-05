<?php
namespace models\services;

class UserService {
    public function getID() {
        sleep(1);

        return 'MOON.1';
    }
    
    public function getBaseInformation() {
        sleep(3);
        
        return array(
            'name' => 'Eric',
            'address' => 'Beijing'
        );
    }
    
    public function getContactInformation() {
        sleep(2);
        
        return array(
            'msn' => 'eric@hotmail.com',
            'phone' => '13812901231'
        );
    }
}
?>