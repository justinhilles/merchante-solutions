<?php

namespace Omnipay\MES;

use Omnipay\Common\AbstractGateway;
use Omnipay\MES\Message\CreateCardRequest;
use Omnipay\MES\Message\SaleRequest;
use Omnipay\MES\Message\VerifyCardRequest;

/**
 * Merchant E-Solutions
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

    public function setEndpoint($endpoint)
    {
        return $this->setParameter('endpoint', $endpoint);
    }

    /**
     * Create a purchase request
     * @param array $parameters
     * @return SaleRequest
     */
    public function purchase(array $parameters = array())
    {
        return $this->createRequest('\Omnipay\MES\Message\SaleRequest', $parameters);
    }

    /**
     * Create a Create Card request
     * @param array $parameters
     * @return CreateCardRequest
     */
    public function createCard(array $parameters = array())
    {
        return $this->createRequest('\Omnipay\MES\Message\CreateCardRequest', $parameters);
    }

    /**
     * Create a Verify Card request
     * @param array $parameters
     * @return VerifyCardRequest
     */
    public function verifyCard(array $parameters = array())
    {
        return $this->createRequest('\Omnipay\MES\Message\VerifyCardRequest', $parameters);
    }
}
