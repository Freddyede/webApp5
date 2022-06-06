<?php

namespace App\Tests\Func;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class HomeTest extends WebTestCase {
    public function testVerifyGoodHomeUrl() {

        $client = static::createClient();

        $client->request('GET', '/');

        $this->assertResponseIsSuccessful();

    }
}
