<?php
/**
 * Created by PhpStorm.
 * User: jhilles
 * Date: 8/5/14
 * Time: 4:49 PM
 */

namespace Omnipay\MES\Message;


class CreateCardRequest extends AbstractRequest {

    public function getData()
    {

    }

    public function sendData($data)
    {
        $trans = new \TpgStoreData($this->getProfileId(), $this->getProfileKey());
        $trans->setRequestField('card_number', $this->getCard()->getNumber());
        $trans->setRequestField('card_exp_date',$this->getCard()->getExpiryDate('ym'));
        $trans->setHost($this->getHost());
        $trans->execute();

        return $this->response = new Response($this, $trans);
    }
} 