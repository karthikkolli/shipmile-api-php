<?php

namespace Shipmile\Api;

use Shipmile\HttpClient\HttpClient;

class Orders 
{
    private $client;

    public function __construct(HttpClient $client)
    {
        $this->client = $client;
        $this->endpoint = '/orders';
    }


    public function create(array $options = array())
    {
        $body = (isset($options['body']) ? $options['body'] : array());

        $response = $this->client->post($this->endpoint, $body, $options);

    }

    public function get($order_id, array $options = array())
    {
        $body = (isset($options['query']) ? $options['query'] : array());
        
        $response = $this->client->get($this->endpoint.'/'.rawurlencode($order_id).'', $body, $options);
    }
} 
