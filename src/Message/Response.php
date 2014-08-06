<?php
/**
 * Created by PhpStorm.
 * User: jhilles
 * Date: 8/5/14
 * Time: 4:47 PM
 */

namespace Omnipay\MES\Message;

use \Omnipay\Common\Message\AbstractResponse;

class Response extends AbstractResponse
{
    public function isSuccessful()
    {
       return (bool) $this->data->isApproved();
    }
} 