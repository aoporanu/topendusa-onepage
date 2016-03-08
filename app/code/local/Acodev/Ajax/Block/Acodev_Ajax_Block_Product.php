<?php

/**
 * Created by PhpStorm.
 * User: adyopo
 * Date: 07.03.2016
 * Time: 23:50
 */
class Acodev_Ajax_Block_Product extends Mage_Catalog_Block_Product
{
    private $_product;

    public function _construct()
    {
        parent::_construct();
        $this->setTemplate('acodev_ajax/product.phtml');
    }

    protected function _toHtml()
    {
        return parent::_toHtml();
    }

    public function setProduct($product)
    {
        $this->_product = $product;
        return $this;
    }

    public function getProduct()
    {
        return $this->_product;
    }
}