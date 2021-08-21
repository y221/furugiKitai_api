<?php

namespace App\Library;
use Illuminate\Support\Str;

class MyFunction
{
    /**
     * 配列のキーをキャメルケースに変換
     * @param array $target
     * @return array
     */
    public static function changeArrayKeyCamel(array $target):array
    {
        foreach($target as $key => $value) {
            unset($target[$key]);
            if(is_array($value)) {
                $target[str::camel($key)] = self::changeArrayKeyCamel($value);
            } else {
                $target[str::camel($key)] = $value;
            }
        }
        return $target;
    }
}