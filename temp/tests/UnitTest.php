<?php

namespace App\Tests;

use PHPUnit\Framework\TestCase;

class UnitTest extends TestCase
{
    public function testUser(): void
    {
        $this->assertTrue('Bob' === 'Bob');
    }
}
