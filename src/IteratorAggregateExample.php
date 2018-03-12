<?php

namespace App;
/**
 * Class IteratorAggregateExample
 * @package App
 * @see http://php.net/manual/ja/class.iteratoraggregate.php
 *
 * 外部イテレータを作成するためのインターフェイスです。
 */
class IteratorAggregateExample implements \IteratorAggregate
{
    // visibilityは、publicにする必要がある
    public $property1 = 'Public property one';
    public $property2 = 'Public property two';
    public $property3;

    public function __construct()
    {
        $this->property3 = 'last property';
    }

    public function getIterator()
    {
        return new \ArrayIterator($this);
    }
}
