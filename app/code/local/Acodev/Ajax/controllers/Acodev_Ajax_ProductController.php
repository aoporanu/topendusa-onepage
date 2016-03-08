<?php

/**
 * Created by PhpStorm.
 * User: adyopo
 * Date: 07.03.2016
 * Time: 23:54
 */

require_once 'Mage/Catalog/controllers/ProductController';

class Acodev_Ajax_ProductController extends Mage_Catalog_ProductController
{
    public function quickViewAction()
    {
        if(!$this->getRequest()->isXmlHttpRequest()) {
            $this->_redirect('/');
        }

        if($product = $this->_initProduct()) {
            $this->getResponse()
                ->setBody($this->getLayout()
                ->createBlock('ajax/product')
                ->setProduct($product)
                ->toHtml());
        } else {
            echo Mage::helper('catalog')->__('Product not found');
        }
    }
}