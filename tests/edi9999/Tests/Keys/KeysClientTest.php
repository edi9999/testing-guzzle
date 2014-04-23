<?php
/**
 * Created by PhpStorm.
 * User: edgar
 * Date: 4/22/14
 * Time: 5:15 PM
 */

namespace edi9999\Tests\Keys;

use edi9999\Keys\KeysClient;

class KeysClientTest extends \PHPUnit_Framework_TestCase {


    public function testThatItShouldReceiveTheKeys()
    {
        $keysClient=new KeysClient();
        echo $keysClient->getKey("edi9999");
    }
}
 