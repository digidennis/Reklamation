<?php
class Digidennis_Reklamation_Block_Payment_Form extends Mage_Payment_Block_Form
{

    protected function _construct()
    {
        $this->setTemplate('digidennis/reklamation/payment/form.phtml');
        parent::_construct();
    }

}
