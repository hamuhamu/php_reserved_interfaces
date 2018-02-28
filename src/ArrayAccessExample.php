<?php

namespace App;

class ArrayAccessExample implements \ArrayAccess
{
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
    public function offsetGet($offset)
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
