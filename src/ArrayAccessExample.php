<?php

namespace App;
/**
 * Class ArrayAccessExample
 * @package App
 * @see http://php.net/manual/ja/class.arrayaccess.php
 *
 * 配列としてオブジェクトにアクセスするための機能のインターフェイスです。
 */
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
        return isset($this->container[$offset]);
    }

    /**
     * ArrayAccess::offsetGet — オフセットを取得する
     *
     * @param mixed $offset
     * @return bool
     */
    public function offsetGet($offset): bool
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * ArrayAccess::offsetSet — 指定したオフセットに値を設定する
     *
     * @param mixed $offset
     * @param mixed $value
     */
    public function offsetSet($offset, $value): void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }


    /**
     * ArrayAccess::offsetUnset — オフセットの設定を解除する
     *
     * @param mixed $offset
     */
    public function offsetUnset($offset ): void
    {
        unset($this->container[$offset]);
    }
}
