<?php


namespace Omnipay\MES\Trident;

class StoreData extends Transaction
{
    function __construct( $profileId, $profileKey )
    {
        parent::__construct($profileId, $profileKey);
        $this->TranType = "T";
    }
}
