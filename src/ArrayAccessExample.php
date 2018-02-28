<?php

namespace App;

class ArrayAccessExample implements \ArrayAccess
{
    private $container = [];
    public function __construct()
    {
        $this->container = [
            'one'   => 1,
            'two'   => 2,
            'three' => 3,
        ];
    }

    /**
     * ArrayAccess::offsetExists — オフセットが存在するかどうか
     *
     * @param mixed $offset
     * @return bool
     */
    public function offsetExists($offset): bool
    {
        return true;
    }

    /**
     * ArrayAccess::offsetGet — オフセットを取得する
     *
     * @param mixed $offset
     * @return bool
     */
    public function offsetGet($offset): bool
    {
        return true;
    }

    /**
     * ArrayAccess::offsetSet — 指定したオフセットに値を設定する
     *
     * @param mixed $offset
     * @param mixed $value
     */
    public function offsetSet($offset, $value): void
    {
        return;
    }


    /**
     * ArrayAccess::offsetUnset — オフセットの設定を解除する
     *
     * @param mixed $offset
     */
    public function offsetUnset($offset ): void
    {
        return;
    }
}
