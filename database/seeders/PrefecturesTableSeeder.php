<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PrefecturesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('prefectures')->insert([
            ['area_id' => 1, 'prefecture' => '北海道'],
            ['area_id' => 1, 'prefecture' => '青森県'],
            ['area_id' => 1, 'prefecture' => '岩手県'],
            ['area_id' => 1, 'prefecture' => '宮城県'],
            ['area_id' => 1, 'prefecture' => '秋田県'],
            ['area_id' => 1, 'prefecture' => '山形県'],
            ['area_id' => 1, 'prefecture' => '福島県'],
            ['area_id' => 2, 'prefecture' => '茨城県'],
            ['area_id' => 2, 'prefecture' => '栃木県'],
            ['area_id' => 2, 'prefecture' => '群馬県'],
            ['area_id' => 2, 'prefecture' => '埼玉県'],
            ['area_id' => 2, 'prefecture' => '千葉県'],
            ['area_id' => 2, 'prefecture' => '東京都'],
            ['area_id' => 2, 'prefecture' => '神奈川県'],
            ['area_id' => 3, 'prefecture' => '新潟県'],
            ['area_id' => 3, 'prefecture' => '富山県'],
            ['area_id' => 3, 'prefecture' => '石川県'],
            ['area_id' => 3, 'prefecture' => '福井県'],
            ['area_id' => 3, 'prefecture' => '山梨県'],
            ['area_id' => 3, 'prefecture' => '長野県'],
            ['area_id' => 4, 'prefecture' => '岐阜県'],
            ['area_id' => 4, 'prefecture' => '静岡県'],
            ['area_id' => 4, 'prefecture' => '愛知県'],
            ['area_id' => 4, 'prefecture' => '三重県'],
            ['area_id' => 5, 'prefecture' => '滋賀県'],
            ['area_id' => 5, 'prefecture' => '京都府'],
            ['area_id' => 5, 'prefecture' => '大阪府'],
            ['area_id' => 5, 'prefecture' => '兵庫県'],
            ['area_id' => 5, 'prefecture' => '奈良県'],
            ['area_id' => 5, 'prefecture' => '和歌山県'],
            ['area_id' => 6, 'prefecture' => '鳥取県'],
            ['area_id' => 6, 'prefecture' => '島根県'],
            ['area_id' => 6, 'prefecture' => '岡山県'],
            ['area_id' => 6, 'prefecture' => '広島県'],
            ['area_id' => 6, 'prefecture' => '山口県'],
            ['area_id' => 6, 'prefecture' => '徳島県'],
            ['area_id' => 6, 'prefecture' => '香川県'],
            ['area_id' => 6, 'prefecture' => '愛媛県'],
            ['area_id' => 6, 'prefecture' => '高知県'],
            ['area_id' => 7, 'prefecture' => '福岡県'],
            ['area_id' => 7, 'prefecture' => '佐賀県'],
            ['area_id' => 7, 'prefecture' => '長崎県'],
            ['area_id' => 7, 'prefecture' => '熊本県'],
            ['area_id' => 7, 'prefecture' => '大分県'],
            ['area_id' => 7, 'prefecture' => '宮崎県'],
            ['area_id' => 7, 'prefecture' => '鹿児島県'],
            ['area_id' => 7, 'prefecture' => '沖縄県'],
        ]);
    }
}
