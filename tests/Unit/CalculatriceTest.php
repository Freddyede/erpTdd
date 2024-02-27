<?php

namespace App\Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Services\CalculatriceService;
class CalculatriceTest extends TestCase
{
    public function testValidAddition(): void
    {

        $calculatriceService = new CalculatriceService();
        $this->assertEquals(3, $calculatriceService->add(2, 1));
    }

    public function testInValidAddition()
    {
        $calculatriceService = new CalculatriceService();
        $this->assertEquals("Cannot add number to string", $calculatriceService->add("Bad", 2));
    }
}
