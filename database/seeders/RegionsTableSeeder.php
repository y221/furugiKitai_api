<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RegionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('regions')->insert([
            ['name' => '北海道・東北'],
            ['name' => '関東'],
            ['name' => '北陸・甲信越'],
            ['name' => '東海'],
            ['name' => '近畿'],
            ['name' => '中国・四国'],
            ['name' => '九州・沖縄'],
        ]);
    }
}
