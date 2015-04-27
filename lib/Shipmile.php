<?php

namespace Shipmile;

class Shipmile
{
    public static $apiKey;

    public static $apiBase = "https://api.shipmile.com"; 

    public static function getApiKey()
    {
        return self::$apiKey;
    }

    /**
     * Sets the API key to be used for requests.
     *
     * @param string $apiKey
     */
    public static function setApiKey($apiKey)
    {
        self::$apiKey = $apiKey;
    }

}
?>
