<?php

namespace App\Tests;

use Symfony\Component\Panther\PantherTestCase;

class PantherTest extends PantherTestCase
{
    public function testAnonymousUserCantAccessProducts():void
    {
        $client = static::createPantherClient();
        $crawler = $client->request('GET', '/products');
        $this->assertStringContainsString('401', $crawler->text());
    }

    public function testAnonymousUserCantAccessUsers():void
    {
        $client = static::createPantherClient();
        $crawler = $client->request('GET', '/users');
        $this->assertStringContainsString('401', $crawler->text());
    }
}
