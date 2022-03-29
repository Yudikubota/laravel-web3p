<?php

namespace RenokiCo\LaravelWeb3\Test;

use RenokiCo\LaravelWeb3\Web3 as LaravelWeb3;
use RenokiCo\LaravelWeb3\Web3Facade;
use Web3\Eth;
use Web3\Net;
use Web3\Web3;

class ConfigurationTest extends TestCase
{
    public function test_http_connection()
    {
        $client = Web3Facade::connection('http');

        $this->assertInstanceOf(LaravelWeb3::class, $client);
        $this->assertInstanceOf(Web3::class, $client->getClient());
        $this->assertInstanceOf(Eth::class, $client->getEth());
        $this->assertInstanceOf(Net::class, $client->getNet());
    }
}
