<?php

namespace App;

use PHPUnit\Framework\TestCase;

class UsageTest extends TestCase
{
    /**
     * @test
     */
    public function Countable()
    {
        $sut = new CountableExample();
        $actual = $sut->count();
        $expected = 3;

        $this->assertSame($expected, $actual);

        $actual = count($sut);
        $expected = 3;

        $this->assertSame($expected, $actual);
    }

    /**
     * @test
     */
    public function ArrayAccess()
    {
        $sut = new ArrayAccessExample();
        $actual = 1;
        $expected = 1;

        $this->assertSame($expected, $actual);
    }
}
