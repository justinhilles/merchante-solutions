<?php


namespace Omnipay\MES\Trident;

class Credit extends Transaction
{
    function __construct( $profileId, $profileKey )
    {
        parent::__construct($profileId, $profileKey);
        $this->TranType = "C";
    }

    function setStoredData( $cardId, $amount )
    {
        $this->RequestFields['card_id'] = $cardId;
        $this->RequestFields['transaction_amount'] = $amount;
    }
}
