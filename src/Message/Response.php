<?php

namespace Omnipay\MES\Message;

use \Omnipay\Common\Message\AbstractResponse;

class Response extends AbstractResponse
{
    public function isSuccessful()
    {
       return (bool) $this->data->isApproved();
    }

    public function getTransactionReference()
    {
        return $this->data->getResponseField('transaction_id');
    }


}
