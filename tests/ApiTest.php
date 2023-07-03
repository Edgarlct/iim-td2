<?php

use Iim\td2\Api;
use PHPUnit\Framework\TestCase;

class ApiTest extends TestCase
{
    public function testGetRandomNumber()
    {
        $api = new Api();
        $this->assertIsInt($api->getRandomNumber());
    }

    public function testGetDateTime()
    {
        $api = new Api();
        $this->assertInstanceOf(\DateTime::class, $api->getDateTime());
        $this->assertIsString($api->getDateAsString());
    }
}
