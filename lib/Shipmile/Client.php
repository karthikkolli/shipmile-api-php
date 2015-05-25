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

    /**
     * Labels
     */
    public function labels()
    {
        return new Api\Labels($this->httpClient);
    }

    /**
     * Pickups
     */
    public function pickup()
    {
        return new Api\Pickup($this->httpClient);
    }

    /**
     * Availability
     */
    public function availability()
    {
        return new Api\Availability($this->httpClient);
    }


}
