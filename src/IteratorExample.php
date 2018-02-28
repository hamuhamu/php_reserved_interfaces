<?php

namespace App;
/**
 * Class IteratorExample
 * @package App
 * @see http://php.net/manual/ja/class.iterator.php
 *
 * 外部のイテレータあるいはオブジェクト自身から反復処理を行うためのインターフェイスです。
 */
class IteratorExample implements \Iterator
{
    private $position = 0;
    private $array = array(
        "firstelement",
        "secondelement",
        "lastelement",
    );

    public function __construct() {
        $this->position = 0;
    }

    public function rewind() {
        var_dump(__METHOD__);
        $this->position = 0;
    }

    public function current() {
        var_dump(__METHOD__);
        return $this->array[$this->position];
    }

    public function key() {
        var_dump(__METHOD__);
        return $this->position;
    }

    public function next() {
        var_dump(__METHOD__);
        ++$this->position;
    }

    public function valid() {
        var_dump(__METHOD__);
        return isset($this->array[$this->position]);
    }
}
