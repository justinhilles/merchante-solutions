<?php

namespace Omnipay\MES\Message;

use Omnipay\MES\Trident\VerifyCard;

class VerifyCardRequest extends AbstractRequest
{
    public function getData()
    {

    }

    public function sendData($data)
    {
        $trans = new VerifyCard($this->getProfileId(), $this->getProfileKey());
        $trans->setTransactionData( $this->getCard()->getNumber(), $this->getCard()->getExpiryDate('ym'), '0.00' );
        $trans->setRequestField('cardholder_street_address', $this->getCard()->getAddress1());
        $trans->setRequestField('cardholder_zip', $this->getCard()->getPostCode());
        $trans->setHost($this->getEndpoint());
        $trans->execute();

        return $this->response = new Response($this, $trans);
    }
}
