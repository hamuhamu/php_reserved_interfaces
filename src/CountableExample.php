<?php

namespace App;
/**
 * Class CountableExample
 * @package App
 * @see http://php.net/manual/ja/class.countable.php
 */
class CountableExample implements \Countable
{
    private $count = 3;
    /**
     * Countable::count — オブジェクトの要素数を数える
     *
     * @return int
     */
    public function count(): int
    {
        return $this->count;
    }
}
