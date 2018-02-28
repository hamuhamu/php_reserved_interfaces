<?php

namespace App;
/**
 * Class IteratorExample
 * @package App
 * @see http://php.net/manual/ja/class.iterator.php
 *
 * 外部のイテレータあるいはオブジェクト自身から反復処理を行うためのインターフェイスです。
 *
 * foreachで使用した場合における呼び出し順序
 *  - 1行目: valid, current, key
 *  - 2行目以降: next, valid, current, key
 *
 * validがfalse(配列の要素数を超過)を返したらloopから抜ける
 *
 */
class IteratorExample implements \Iterator
{
    private $position = 0;
    private $array = [
        "firstelement",
        "secondelement",
        "lastelement",
    ];

    public function __construct() {
        $this->position = 0;
    }

    /**
     * Iterator::rewind — イテレータの最初の要素に巻き戻す
     */
    public function rewind(): void
    {
        var_dump(__METHOD__);
        $this->position = 0;
    }

    /**
     * Iterator::current — 現在の要素を返す
     *
     * @return mixed
     */
    public function current()
    {
        var_dump(__METHOD__);
        return $this->array[$this->position];
    }

    /**
     * Iterator::key — 現在の要素のキーを返す
     *
     * @return int
     */
    public function key(): int
    {
        var_dump(__METHOD__);
        return $this->position;
    }

    /**
     * Iterator::next — 次の要素に進む
     */
    public function next(): void
    {
        var_dump(__METHOD__);
        ++$this->position;
    }

    /**
     * Iterator::valid — 現在位置が有効かどうかを調べる
     * このメソッドは Iterator::rewind() および Iterator::next() の後にコールされ、 現在の位置が有効化どうかを調べます。
     *
     * @return bool
     */
    public function valid(): bool
    {
        var_dump(__METHOD__);
        return isset($this->array[$this->position]);
    }
}
