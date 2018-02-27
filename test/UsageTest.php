<?php

namespace App;

use PHPUnit\Framework\TestCase;

class UsageTest extends TestCase
{
    /**
     * @test
     */
    public function 仮テスト()
    {
        $actual = true;
        $expected = true;

        $this->assertSame($expected, $actual);
    }
}
