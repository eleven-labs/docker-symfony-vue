<?php

namespace Tests\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

/**
 * Class DefaultControllerTest
 * @package Tests\AppBundle\Controller
 */
class AppControllerTest extends WebTestCase
{
    /**
     * @param string $baseUrl
     * @param bool $exceptedError
     *
     * @return void
     *
     * @dataProvider provideRoute()
     */
    public function testIndex(string $baseUrl, bool $exceptedError): void
    {
        $client = static::createClient();
        $client->request('GET', $baseUrl);

        $this->assertEquals($exceptedError, $client->getResponse()->getStatusCode());
    }
}
