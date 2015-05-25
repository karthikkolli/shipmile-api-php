<?php

namespace Shipmile\Api;

use Shipmile\HttpClient\HttpClient;

class Availability
{
    private $client;

    public function __construct(HttpClient $client)
    {
        $this->client = $client;
        $this->endpoint = '/availability';
    }


    public function get($pincode, array $options = array())
    {
        $body = (isset($options['query']) ? $options['query'] : array());

        $response = $this->client->post($this->endpoint.'/'.rawurlencode($pincode), $body, $options);

        return $response;

    }

}
