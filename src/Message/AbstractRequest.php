<?php

namespace Omnipay\MES\Message;


abstract class AbstractRequest extends \Omnipay\Common\Message\AbstractRequest
{
    protected $host = "https://api.merchante-solutions.com/mes-api/tridentApi";

    public function getProfileId()
    {
        return $this->getParameter('profileId');
    }

    public function setProfileId($value)
    {
        return $this->setParameter('profileId', $value);
    }

    public function getProfileKey()
    {
        return $this->getParameter('profileKey');
    }

    public function setProfileKey($value)
    {
        return $this->setParameter('profileKey', $value);
    }
} 