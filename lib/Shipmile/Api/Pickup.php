<?php

namespace Shipmile\Api;

use Shipmile\HttpClient\HttpClient;

class Pickup
{
    private $client;

    public function __construct(HttpClient $client)
    {
        $this->client = $client;
        $this->endpoint = '/pickup';
    }


    public function mark(array $options = array())
    {
        $body = (isset($options['body']) ? $options['body'] : array());

        $response = $this->client->post($this->endpoint, $body, $options);

        return $response;

    }

}
