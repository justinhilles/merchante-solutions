<?php
/**
 * Created by PhpStorm.
 * User: jhilles
 * Date: 8/5/14
 * Time: 4:54 PM
 */

namespace Omnipay\MES\Message;


class VerifyCardRequest extends AbstractRequest
{
    public function getData()
    {

    }

    public function sendData($data)
    {
        $trans = new \TpgVerifyCard($this->getProfileId(), $this->getProfileKey());
        $trans->setTransactionData( $this->getCard()->getNumber(), $this->getCard()->getExpiryDate('ym'), '0.00' );
        $trans->setRequestField('cardholder_street_address', $this->getCard()->getAddress1());
        $trans->setRequestField('cardholder_zip', $this->getCard()->getPostCode());
        $trans->setHost($this->getHost());
        $trans->execute();

        return $this->response = new Response($this, $trans);
    }
} 