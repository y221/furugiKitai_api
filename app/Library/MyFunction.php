<?php

namespace App\Library;
use Illuminate\Support\Str;

class MyFunction
{
    /**
     * 配列のキーをキャメルケースに変換
     * @param array $target
     * @return array $arrayKeyCamel
     */
    public static function changeArrayKeyCamel(array $target):array
    {
        $arrayKeyCamel = [];
        foreach($target as $key => $value) {
            $arrayKeyCamel[str::camel($key)] = is_array($value) ? self::changeArrayKeyCamel($value) : $value;
        }
        return $arrayKeyCamel;
    }

    public static function changeArrayKeySnake(array $target) :array
    {
        $arrayKeySnake = [];
        foreach($target as $key => $value) {
            $arrayKeySnake[str::snake($key)] = is_array($value) ? self::changeArrayKeySnake($value) : $value;
        }
        return $arrayKeySnake;
    }
}