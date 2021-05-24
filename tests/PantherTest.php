<?php

namespace App\Tests;

use Symfony\Component\Panther\PantherTestCase;

class PantherTest extends PantherTestCase
{
    public function testAnonymousUserCantAccessProducts():void
    {
        $client = static::createPantherClient();
        $crawler = $client->request('GET', '/api/products');
        $this->assertStringContainsString('401', $crawler->text());
    }

    public function testAnonymousUserCantAccessUsers():void
    {
        $client = static::createPantherClient();
        $crawler = $client->request('GET', '/api/users');
        $this->assertStringContainsString('401', $crawler->text());
    }
}
