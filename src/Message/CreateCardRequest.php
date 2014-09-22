<?php

namespace Omnipay\MES\Message;

use Omnipay\MES\Trident\StoreData;

class CreateCardRequest extends AbstractRequest {

    public function getData()
    {

    }

    public function sendData($data)
    {
        $trans = new StoreData($this->getProfileId(), $this->getProfileKey());
        $trans->setRequestField('card_number', $this->getCard()->getNumber());
        $trans->setRequestField('card_exp_date', $this->getCard()->getExpiryDate('ym'));
        $trans->setHost($this->getEndpoint());
        $trans->execute();

        return $this->response = new Response($this, $trans);
    }
}
