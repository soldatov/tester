<?php

namespace App\Tests;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;

class IndexTest extends BaseTestCase
{
    public function testIndex()
    {
        $this->assertTrue(true);
    }

    /**
     * @throws GuzzleException
     */
    public function testYa()
    {
        $client = new Client();
        $response = $client->request('GET', 'https://www.php.net');
        $this->assertEquals(200, $response->getStatusCode());
        $content = $response->getBody()->getContents();
        $this->assertStringContainsString(
            'PHP is a popular general-purpose scripting language that is especially suited to web development.',
            $content
        );
    }
}
