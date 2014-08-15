<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class Amacgregor_Patchwork_Model_Example_TestSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Amacgregor_Patchwork_Model_Example_Test');
    }

    function it_should_get_back_a_product()
    {
        /**
         * Example usage of Patchwork to override Mage::getModel
         *
         * This is a proof of concept and should be moved into a helper or some sort of extension.
         */
        \Patchwork\replace('Mage::getModel', function($modelClass = '', $arguements = array()) {

            $prophet = new \Prophecy\Prophet;
            $prophecy = $prophet->prophesize();
            $prophecy->willExtend('\Mage_Catalog_Model_Product');
            $dummy = $prophecy->reveal();

            return $dummy; // could also do some other sort of logging if you want this to work with actual pageloads.
        });

        $this->getProduct()->shouldReturnAnInstanceOf('Mage_Catalog_Model_Product');
    }
}
