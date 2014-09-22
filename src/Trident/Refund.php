<?php


namespace Omnipay\MES\Trident;

class Refund extends Transaction
{
    function __construct( $profileId, $profileKey, $tranId )
    {
        parent::__construct($profileId, $profileKey);
        $this->RequestFields['transaction_id'] = $tranId;
        $this->TranType = "U";
    }

    function setStoredData( $cardId, $amount )
    {
        $this->RequestFields['card_id'] = $cardId;
        $this->RequestFields['transaction_amount'] = $amount;
    }
}
