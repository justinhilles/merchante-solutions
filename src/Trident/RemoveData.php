<?php


namespace Omnipay\MES\Trident;

class RemoveData extends Transaction
{
    function __construct($profileId, $profileKey, $cardId)
    {
        parent::__construct($profileId, $profileKey);
        $this->RequestFields['card_id'] = $cardId;
        $this->TranType = "X";
    }
}