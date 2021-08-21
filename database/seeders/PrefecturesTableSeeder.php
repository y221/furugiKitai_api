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
            ['region_id' => 1, 'prefecture' => '北海道'],
            ['region_id' => 1, 'prefecture' => '青森県'],
            ['region_id' => 1, 'prefecture' => '岩手県'],
            ['region_id' => 1, 'prefecture' => '宮城県'],
            ['region_id' => 1, 'prefecture' => '秋田県'],
            ['region_id' => 1, 'prefecture' => '山形県'],
            ['region_id' => 1, 'prefecture' => '福島県'],
            ['region_id' => 2, 'prefecture' => '茨城県'],
            ['region_id' => 2, 'prefecture' => '栃木県'],
            ['region_id' => 2, 'prefecture' => '群馬県'],
            ['region_id' => 2, 'prefecture' => '埼玉県'],
            ['region_id' => 2, 'prefecture' => '千葉県'],
            ['region_id' => 2, 'prefecture' => '東京都'],
            ['region_id' => 2, 'prefecture' => '神奈川県'],
            ['region_id' => 3, 'prefecture' => '新潟県'],
            ['region_id' => 3, 'prefecture' => '富山県'],
            ['region_id' => 3, 'prefecture' => '石川県'],
            ['region_id' => 3, 'prefecture' => '福井県'],
            ['region_id' => 3, 'prefecture' => '山梨県'],
            ['region_id' => 3, 'prefecture' => '長野県'],
            ['region_id' => 4, 'prefecture' => '岐阜県'],
            ['region_id' => 4, 'prefecture' => '静岡県'],
            ['region_id' => 4, 'prefecture' => '愛知県'],
            ['region_id' => 4, 'prefecture' => '三重県'],
            ['region_id' => 5, 'prefecture' => '滋賀県'],
            ['region_id' => 5, 'prefecture' => '京都府'],
            ['region_id' => 5, 'prefecture' => '大阪府'],
            ['region_id' => 5, 'prefecture' => '兵庫県'],
            ['region_id' => 5, 'prefecture' => '奈良県'],
            ['region_id' => 5, 'prefecture' => '和歌山県'],
            ['region_id' => 6, 'prefecture' => '鳥取県'],
            ['region_id' => 6, 'prefecture' => '島根県'],
            ['region_id' => 6, 'prefecture' => '岡山県'],
            ['region_id' => 6, 'prefecture' => '広島県'],
            ['region_id' => 6, 'prefecture' => '山口県'],
            ['region_id' => 6, 'prefecture' => '徳島県'],
            ['region_id' => 6, 'prefecture' => '香川県'],
            ['region_id' => 6, 'prefecture' => '愛媛県'],
            ['region_id' => 6, 'prefecture' => '高知県'],
            ['region_id' => 7, 'prefecture' => '福岡県'],
            ['region_id' => 7, 'prefecture' => '佐賀県'],
            ['region_id' => 7, 'prefecture' => '長崎県'],
            ['region_id' => 7, 'prefecture' => '熊本県'],
            ['region_id' => 7, 'prefecture' => '大分県'],
            ['region_id' => 7, 'prefecture' => '宮崎県'],
            ['region_id' => 7, 'prefecture' => '鹿児島県'],
            ['region_id' => 7, 'prefecture' => '沖縄県'],
        ]);
    }
}
