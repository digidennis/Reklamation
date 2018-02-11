<?php
class Digidennis_Reklamation_Model_Reklamation extends Mage_Payment_Model_Method_Abstract
{
    protected $_code = 'digidennis_reklamation';
    protected $_formBlockType = 'digidennis_reklamation/payment_form';
    protected $_infoBlockType = 'digidennis_reklamation/info_reklamation';

    protected $_canCapture              = true;
    protected $_canRefund               = true;
    protected $_canUseCheckout          = false;
    protected $_canRefundInvoicePartial = true;
    protected $_canUseForMultishipping  = false;

}
