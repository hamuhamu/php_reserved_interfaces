<?php

namespace App;

class CountableExample implements \Countable
{
    private $count = 3;
    /**
     * Countable::count — オブジェクトの要素数を数える
     *
     * @return int
     */
    public function count() {
        return $this->count;
    }
}
