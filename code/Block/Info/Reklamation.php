<?php
class Digidennis_Reklamation_Block_Info_Reklamation extends Mage_Payment_Block_Info
{
    protected function _construct()
    {
        parent::_construct();
        $this->setTemplate('digidennis/reklamation/info/info.phtml');
    }
}
