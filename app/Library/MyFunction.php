<?php

namespace App\Library;
use Illuminate\Support\Str;

class MyFunction
{
    /**
     * 配列のキーをキャメルケースに変換
     *
     * @param array $array
     * @return array
     */
    public static function changeArrayKeyCamel($array)
    {
        $arrayKeyCamel = [];
        foreach ($array as $record) {
            $convertedRecord = [];
            foreach ($record as $key => $value) {
                $convertedRecord[Str::camel($key)] = $value; 
            }
            $arrayKeyCamel[] = $convertedRecord;
        }
        return $arrayKeyCamel;
    }
}