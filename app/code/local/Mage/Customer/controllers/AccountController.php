<?php
require_once Mage::getModuleDir('controllers', 'Mage_Customer').DS.'AccountController.php';

class Mage_Customer_AccountController extends Mage_Core_Controller_Front_Action {
    public function _construct()
    {
        parent::_construct();
    }

    public function indexAction()
    {
        parent::indexAction();
        if($root = $this->getLayout()->getBlock('root')) {
            $root->addBodyClass('customer-account-index');
        }
    }
}