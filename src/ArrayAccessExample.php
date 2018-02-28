<?php

namespace App;

class ArrayAccessExample implements \ArrayAccess
{
//* ArrayAccess::offsetExists — オフセットが存在するかどうか
//* ArrayAccess::offsetGet — オフセットを取得する
//* ArrayAccess::offsetSet — 指定したオフセットに値を設定する
//* ArrayAccess::offsetUnset — オフセットの設定を解除する

    public function offsetExists($offset): bool
    {
        return true;
    }

    public function offsetGet($offset)
    {
        return true;
    }

    public function offsetSet($offset, $value): void
    {
        return;
    }

    public function offsetUnset($offset ): void
    {
        return;
    }
}
