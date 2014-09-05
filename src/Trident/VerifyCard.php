<?php


namespace Omnipay\MES\Trident;

class VerifyCard extends Transaction
{

    function __construct($profileId, $profileKey)
    {
        parent::__construct($profileId, $profileKey);
        $this->TranType = 'A';
    }

}
 