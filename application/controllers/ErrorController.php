<?php

class ErrorController extends \Zend_Controller_Action {

    public function errorAction() {
        $errors = $this->getRequest()->getParam('error_handler');
        if (! $errors || ! $errors instanceof ArrayObject) {
            $this->setPageValues(array('message' => 'You have reached the error page'));
            return;
        }

        switch ($errors->type) {
            case Zend_Controller_Plugin_ErrorHandler::EXCEPTION_NO_ROUTE:
            case Zend_Controller_Plugin_ErrorHandler::EXCEPTION_NO_CONTROLLER:
            case Zend_Controller_Plugin_ErrorHandler::EXCEPTION_NO_ACTION:
                echo '<h1>Error 404</h1>';
                echo print_r($errors, true);
                break;
            default:
                $this->getResponse()->setHttpResponseCode(500);
                echo '<h1>Error 500</h1>';
                echo print_r($errors, true);
                break;
        }
    }
}

