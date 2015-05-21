<?php

namespace Shipmile\Api;

use Shipmile\HttpClient\HttpClient;

class Labels
{
    private $client;

    public function __construct(HttpClient $client)
    {
        $this->client = $client;
        $this->endpoint = '/labels';
    }


    public function getUrl(array $options = array())
    {
        $body = (isset($options['body']) ? $options['body'] : array());

        $response = $this->client->post($this->endpoint, $body, $options);

        return $response;

    }

}
