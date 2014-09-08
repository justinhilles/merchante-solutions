<?php

namespace Omnipay\MES\Message;

use Omnipay\MES\Trident\Sale;

class SaleRequest extends AbstractRequest
{
    public function getData()
    {
        return array();
    }

    /**
     * @param array $data
     * @return \Omnipay\Common\Message\ResponseInterface|Response
     */
    public function sendData($data)
    {
        $trans = new Sale($this->getProfileId(), $this->getProfileKey());
        $trans->setAvsRequest($this->getCard()->getAddress1(), $this->getCard()->getPostcode());
        $trans->setStoredData($this->parameters->get('card_id'), $this->getAmount());
        $trans->setRequestField('card_exp_date', $this->getCard()->getExpiryDate('Ym'));
        $trans->setRequestField('invoice_number', $this->parameters->get('invoice_number'));
        $trans->setHost($this->host);
        $trans->execute();

        return $this->response = new Response($this, $trans);
    }
}
