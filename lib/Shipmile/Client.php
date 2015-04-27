<?php

namespace Shipmile;

use Shipmile\HttpClient\HttpClient;

class Client
{
    private $httpClient;

    public function __construct($auth = array(), array $options = array())
    {
        $this->httpClient = new HttpClient($auth, $options);
    }

    /**
     * Orders
     */
    public function orders()
    {
        return new Api\Orders($this->httpClient);
    }
}
