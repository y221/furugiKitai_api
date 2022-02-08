<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AreaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('prefectures')->insert([
            ['prefecture_id' => 13, 'name' => '新宿'],
            ['prefecture_id' => 13, 'name' => '渋谷'],
            ['prefecture_id' => 13, 'name' => '原宿・青山・表参道'],
            ['prefecture_id' => 13, 'name' => '中目黒・代官山'],
            ['prefecture_id' => 13, 'name' => '学芸大学・都立大学'],
            ['prefecture_id' => 13, 'name' => '三軒茶屋'],
            ['prefecture_id' => 13, 'name' => '高円寺'],
            ['prefecture_id' => 13, 'name' => '阿佐ヶ谷'],
            ['prefecture_id' => 14, 'name' => '横浜'],
            ['prefecture_id' => 14, 'name' => '鎌倉'],
            ['prefecture_id' => 14, 'name' => '元町中華街・石川町'],
        ])
    }
}
