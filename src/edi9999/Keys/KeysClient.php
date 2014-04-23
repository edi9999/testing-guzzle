<?php
/**
 * Created by PhpStorm.
 * User: edgar
 * Date: 4/22/14
 * Time: 3:08 PM
 */

namespace edi9999\Keys;



use GuzzleHttp\Client;

class KeysClient
{
    function __construct()
    {
        $this->client = new Client(
            ['base_url' => 'https://api.github.com/']
        );
    }

    function getKey($userName)
    {
        $res = $this->client->get('/users/'.$userName.'/keys');
        return $res->json();
    }

}

