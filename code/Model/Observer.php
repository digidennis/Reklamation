<?php

class Digidennis_Reklamation_Model_Observer
{

    public function completeOrderAction($observer)
    {
        $block = $observer->getEvent()->getBlock();
        $order = Mage::registry('current_order');

        if ($order &&
            $order->getPayment()->getMethodInstance()->getCode() == 'digidennis_reklamation' &&
            $block instanceof Mage_Adminhtml_Block_Sales_Order_View
        ) {
            $message = Mage::helper('sales')->__('Are you sure you want to Change Status?');
            $block->addButton('digidennis_reklamation',
                array( 'label' => Mage::helper('sales')->__('Complete'),
                    'onclick' => "confirmSetLocation('{$message}', '{$block->getUrl('reklamation/adminhtml_index/complete')}')", 'class' => 'go' ));
        }
    }
}