<?php

namespace Omnipay\MES\Message;

abstract class AbstractRequest extends \Omnipay\Common\Message\AbstractRequest
{

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

    public function getEndpoint()
    {
        return $this->getParameter('endpoint');
    }

    public function setEndpoint($endpoint)
    {
        return $this->setParameter('endpoint', $endpoint);
    }
}
