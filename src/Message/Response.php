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

    public function getMessage()
    {
        return $this->data->getResponseField('auth_response_text');
    }

    public function getCode()
    {
        return $this->data->getResponseField('error_code');
    }


}
