<?php

namespace Omnipay\MES;

use Omnipay\Common\AbstractGateway;

/**
 * Authorize.Net AIM Class
 */
class Gateway extends AbstractGateway
{
    public function getName()
    {
        return 'MES';
    }

    public function getDefaultParameters()
    {
        return array(
            'profileId' => '',
            'profileKey' => '',
        );
    }

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

    public function sale(array $parameters = array())
    {
        return $this->createRequest('\Omnipay\MES\Message\SaleRequest', $parameters);
    }

    public function createCard(array $parameters = array())
    {
        return $this->createRequest('\Omnipay\MES\Message\CreateCardRequest', $parameters);
    }

    public function verifyCard(array $parameters = array())
    {
        return $this->createRequest('\Omnipay\MES\Message\VerifyCardRequest', $parameters);
    }
}
