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
    public function Iterator_foreach()
    {
        $sut = new IteratorExample();

        $actual = [];
        foreach($sut as $key => $value) {
            $actual[$key] = $value;
        }

        $expected = [
            0 => 'firstelement',
            1 => 'secondelement',
            2 => 'lastelement',
        ];

        $this->assertSame($expected, $actual);
    }

    /**
     * @test
     */
    public function Iterator_valid_current_key()
    {
        $sut = new IteratorExample();

        $this->assertSame($expected = true, $sut->valid(), '0行目が存在するか？');
        $this->assertSame($expected = 'firstelement', $sut->current(), '0行目の値を返すこと');
        $this->assertSame($expected = 0, $sut->key(), '0行目のキーを返すこと');

        // 1行目に進める
        $sut->next();

        $this->assertSame($expected = true, $sut->valid(), '1行目が存在するか？');
        $this->assertSame($expected = 'secondelement', $sut->current(), '1行目の値を返すこと');
        $this->assertSame($expected = 1, $sut->key(), '1行目のキーを返すこと');

        // 2行目に進める
        $sut->next();

        $this->assertSame($expected = true, $sut->valid(), '2行目が存在するか？');
        $this->assertSame($expected = 'lastelement', $sut->current(), '2行目の値を返すこと');
        $this->assertSame($expected = 2, $sut->key(), '2行目のキーを返すこと');

        // 3行目に進める
        $sut->next();
        $this->assertSame($expected = false, $sut->valid(), '3行目が存在するか？');
    }

    /**
     * @test
     */
    public function IteratorAggregate_foreach()
    {
        $sut = new IteratorAggregateExample();

        $actual = [];
        foreach($sut as $key => $value) {
            $actual[$key] = $value;
        }

        $expected = [
            'property1' => 'Public property one',
            'property2' => 'Public property two',
            'property3' => 'last property',
        ];

        $this->assertSame($expected, $actual);
    }

    /**
     * @test
     */
    public function IteratorAggregate_getIterator()
    {
        $sut = new IteratorAggregateExample();
        $itr = $sut->getIterator();

        $this->assertSame($expected = true, $itr->valid(), '0行目が存在するか？');
        $this->assertSame($expected = 'Public property one', $itr->current(), '0行目の値を返すこと');
        $this->assertSame($expected = 'property1', $itr->key(), '0行目のキーを返すこと');

        // 1行目に進める
        $itr->next();

        $this->assertSame($expected = true, $itr->valid(), '1行目が存在するか？');
        $this->assertSame($expected = 'Public property two', $itr->current(), '1行目の値を返すこと');
        $this->assertSame($expected = 'property2', $itr->key(), '1行目のキーを返すこと');

        // 2行目に進める
        $itr->next();

        $this->assertSame($expected = true, $itr->valid(), '2行目が存在するか？');
        $this->assertSame($expected = 'last property', $itr->current(), '2行目の値を返すこと');
        $this->assertSame($expected = 'property3', $itr->key(), '2行目のキーを返すこと');

        // 3行目に進める
        $itr->next();
        $this->assertSame($expected = false, $itr->valid(), '3行目が存在するか？');
    }
}
