<?php

namespace App;

use PHPUnit\Framework\TestCase;

class UsageTest extends TestCase
{
    /**
     * @test
     */
    public function Countable_count()
    {
        $sut = new CountableExample();
        $actual = $sut->count();
        $expected = 3;

        $this->assertSame($expected, $actual);

        // PHP標準関数のcountでもカウンティングできる
        $actual = count($sut);
        $expected = 3;

        $this->assertSame($expected, $actual);
    }

    /**
     * @test
     */
    public function ArrayAccess_offsetExists()
    {
        $sut = new ArrayAccessExample();

        $this->assertSame(true, $sut->offsetExists('one'));
        $this->assertSame(true, isset($sut['one']));

        $this->assertSame(false, $sut->offsetExists('xxx'));
        $this->assertSame(false, isset($sut['xxx']));
    }

    /**
     * @test
     */
    public function ArrayAccess_offsetSet_offsetGet()
    {
        $sut = new ArrayAccessExample();

        $sut->offsetSet(0,'Append 1');
        $this->assertSame('Append 1', $sut->offsetGet(0));

        $sut[1] = 'Append 2';
        $this->assertSame('Append 2', $sut[1]);
    }

    /**
     * @test
     */
    public function ArrayAccess_offsetUnset()
    {
        $sut = new ArrayAccessExample();

        $this->assertSame(1, $sut['one']);
        $sut->offsetUnset('one');
        $this->assertSame(null, $sut['one']);

        $this->assertSame(2, $sut['two']);
        unset($sut['two']);
        $this->assertSame(null, $sut['two']);
    }

    /**
     * @test
     */
    public function Iterator()
    {
        $sut = new IteratorExample();

        foreach($sut as $key => $value) {
        }
    }
}
