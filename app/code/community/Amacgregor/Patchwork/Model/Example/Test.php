<?php

class Amacgregor_Patchwork_Model_Example_Test extends Mage_Core_Model_Abstract
{

    public function getProduct()
    {
        // TODO: write logic here
        return Mage::getModel('catalog/product');
    }
}
