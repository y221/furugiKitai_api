<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ShopsHokkaido extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('shops')->insert([
            ['name' => 'BRIDGE', 'gender_id' => 3, 'prefecture_id' => 1, 'area_id' => 22, 'city' => '札幌市', 'address' => '中央区北7条西19丁目38-74-2', 'building' => '第53藤栄ビル1F', 'instagram_url' => 'https://www.instagram.com/bridge_sapporo', 'holiday' => 'なし', 'business_hour' => '12:00-18:00(月～土) 12:00-17:00(日・祝)', 'created_at' => date('Y-m-t'), 'updated_at' => date('Y-m-t'), 'created_user_id' => 1, 'updated_user_id' => 1],
            ['name' => 'HIGH POSITION', 'gender_id' => 3, 'prefecture_id' => 1, 'area_id' => 22, 'city' => '札幌市', 'address' => '中央区南3条西2丁目1-6-5', 'building' => '2F', 'instagram_url' => 'https://www.instagram.com/highposition_sapporo', 'holiday' => '', 'business_hour' => '13:00-20:00', 'created_at' => date('Y-m-t'), 'updated_at' => date('Y-m-t'), 'created_user_id' => 1, 'updated_user_id' => 1],
            ['name' => 'LEAF', 'gender_id' => 1, 'prefecture_id' => 1, 'area_id' => 22, 'city' => '札幌市', 'address' => '中央区南2条西8丁目8-1', 'building' => '松本ビル2F', 'instagram_url' => 'https://www.instagram.com/sapporo_leaf', 'holiday' => '', 'business_hour' => '13:00-20:00', 'created_at' => date('Y-m-t'), 'updated_at' => date('Y-m-t'), 'created_user_id' => 1, 'updated_user_id' => 1],
            ['name' => 'リアルモンキー', 'gender_id' => 1, 'prefecture_id' => 1, 'area_id' => 22, 'city' => '札幌市', 'address' => '中央区南3条西2丁目17-2', 'building' => '', 'instagram_url' => 'https://www.instagram.com/realmonkey_s', 'holiday' => '', 'business_hour' => '11:00-20:00', 'created_at' => date('Y-m-t'), 'updated_at' => date('Y-m-t'), 'created_user_id' => 1, 'updated_user_id' => 1],
            ['name' => 'BACK IN THE DAYZ', 'gender_id' => 1, 'prefecture_id' => 1, 'area_id' => 22, 'city' => '札幌市', 'address' => '中央区南2条西7丁目1-5', 'building' => '2.7ビル2階', 'instagram_url' => 'https://www.instagram.com/backinthedayzbitd', 'holiday' => '', 'business_hour' => '12:30-20:00', 'created_at' => date('Y-m-t'), 'updated_at' => date('Y-m-t'), 'created_user_id' => 1, 'updated_user_id' => 1],
            ['name' => 'Arch Sapporo', 'gender_id' => 1, 'prefecture_id' => 1, 'area_id' => 22, 'city' => '札幌市', 'address' => '中央区南3条西8丁目11-4', 'building' => '第一ビル1F/2F', 'instagram_url' => 'https://www.instagram.com/archsapporo', 'holiday' => '', 'business_hour' => 'daily 13:00-20:00 Sat&Sunday 12:00-20:00', 'created_at' => date('Y-m-t'), 'updated_at' => date('Y-m-t'), 'created_user_id' => 1, 'updated_user_id' => 1],
            ['name' => 'SAPPORO-BASE CLOTHING STORE', 'gender_id' => 1, 'prefecture_id' => 1, 'area_id' => 22, 'city' => '札幌市', 'address' => '中央区南2条西8丁目8−1', 'building' => '松本ビル 1F', 'instagram_url' => 'https://www.instagram.com/sapporobase', 'holiday' => '', 'business_hour' => '11:00-20:00', 'created_at' => date('Y-m-t'), 'updated_at' => date('Y-m-t'), 'created_user_id' => 1, 'updated_user_id' => 1],
            ['name' => 'PANAMABOY 札幌店', 'gender_id' => 2, 'prefecture_id' => 1, 'area_id' => 22, 'city' => '札幌市', 'address' => '中央区南2条西4丁目11', 'building' => '', 'instagram_url' => 'https://www.instagram.com/sapporo_panama', 'holiday' => '', 'business_hour' => '10:00-20:00', 'created_at' => date('Y-m-t'), 'updated_at' => date('Y-m-t'), 'created_user_id' => 1, 'updated_user_id' => 1],
            ['name' => 'om', 'gender_id' => 1, 'prefecture_id' => 1, 'area_id' => 22, 'city' => '札幌市', 'address' => '中央区南2条西1丁目11-7', 'building' => '', 'instagram_url' => 'https://www.instagram.com/om_sapporo', 'holiday' => '', 'business_hour' => '11:00-20:00', 'created_at' => date('Y-m-t'), 'updated_at' => date('Y-m-t'), 'created_user_id' => 1, 'updated_user_id' => 1],
            ['name' => 'I LOVE STORE', 'gender_id' => 1, 'prefecture_id' => 1, 'area_id' => 22, 'city' => '札幌市', 'address' => '中央区南2条西2丁目', 'building' => 'おくむらビルB1F', 'instagram_url' => 'https://www.instagram.com/ilovestore01101', 'holiday' => '', 'business_hour' => '11:00-19:00', 'created_at' => date('Y-m-t'), 'updated_at' => date('Y-m-t'), 'created_user_id' => 1, 'updated_user_id' => 1],
            ['name' => 'VINTAGE STORE FREEWAY', 'gender_id' => 1, 'prefecture_id' => 1, 'area_id' => 22, 'city' => '札幌市', 'address' => '中央区南5条東2丁目12−3', 'building' => '', 'instagram_url' => 'https://www.instagram.com/freeway.sapporo', 'holiday' => '水曜日', 'business_hour' => '13:00-19:00', 'created_at' => date('Y-m-t'), 'updated_at' => date('Y-m-t'), 'created_user_id' => 1, 'updated_user_id' => 1],
            ['name' => 'Little Tree', 'gender_id' => 2, 'prefecture_id' => 1, 'area_id' => 23, 'city' => '旭川市', 'address' => '豊岡4条5丁目3-18', 'building' => '', 'instagram_url' => 'https://www.instagram.com/littletree_usa', 'holiday' => '', 'business_hour' => '12:00-20:00(土/日/祝-21:00) ', 'created_at' => date('Y-m-t'), 'updated_at' => date('Y-m-t'), 'created_user_id' => 1, 'updated_user_id' => 1],
            ['name' => 'Share', 'gender_id' => 3, 'prefecture_id' => 1, 'area_id' => 23, 'city' => '旭川市', 'address' => '豊岡4条5丁目3-18', 'building' => '', 'instagram_url' => 'https://www.instagram.com/share_vintage', 'holiday' => '', 'business_hour' => '12:00-20:00', 'created_at' => date('Y-m-t'), 'updated_at' => date('Y-m-t'), 'created_user_id' => 1, 'updated_user_id' => 1],
            ['name' => 'REPRESENT', 'gender_id' => 1, 'prefecture_id' => 1, 'area_id' => 23, 'city' => '旭川市', 'address' => '6条通8丁目36-38', 'building' => '', 'instagram_url' => 'https://www.instagram.com/represent_asahikawa', 'holiday' => '', 'business_hour' => '12:00-19:00', 'created_at' => date('Y-m-t'), 'updated_at' => date('Y-m-t'), 'created_user_id' => 1, 'updated_user_id' => 1],
            ['name' => 'JENNIC', 'gender_id' => 3, 'prefecture_id' => 1, 'area_id' => 23, 'city' => '旭川市', 'address' => '3条通10丁目549', 'building' => '', 'instagram_url' => 'https://www.instagram.com/jennicstyle', 'holiday' => '', 'business_hour' => '12:00-20:00', 'created_at' => date('Y-m-t'), 'updated_at' => date('Y-m-t'), 'created_user_id' => 1, 'updated_user_id' => 1],
            ['name' => 'Diddy', 'gender_id' => 1, 'prefecture_id' => 1, 'area_id' => 23, 'city' => '旭川市', 'address' => '3条通7丁目左10', 'building' => '', 'instagram_url' => 'https://www.instagram.com/usedclothing_diddy', 'holiday' => '', 'business_hour' => '12:00-20:00', 'created_at' => date('Y-m-t'), 'updated_at' => date('Y-m-t'), 'created_user_id' => 1, 'updated_user_id' => 1],
            ['name' => 'STORAGE', 'gender_id' => 1, 'prefecture_id' => 1, 'area_id' => 24, 'city' => '小樽市', 'address' => '若竹町18-25', 'building' => '', 'instagram_url' => 'https://www.instagram.com/storage_otaru', 'holiday' => '月曜日、木曜日', 'business_hour' => '13:00-20:00', 'created_at' => date('Y-m-t'), 'updated_at' => date('Y-m-t'), 'created_user_id' => 1, 'updated_user_id' => 1],
            ['name' => '凮月堂', 'gender_id' => 1, 'prefecture_id' => 1, 'area_id' => 24, 'city' => '小樽市', 'address' => '色内3丁目6-5', 'building' => '', 'instagram_url' => 'https://www.instagram.com/fu_getsu_do', 'holiday' => '火曜日', 'business_hour' => '11:00~16:00', 'created_at' => date('Y-m-t'), 'updated_at' => date('Y-m-t'), 'created_user_id' => 1, 'updated_user_id' => 1],
            ['name' => 'Hamburg Cafe', 'gender_id' => 1, 'prefecture_id' => 1, 'area_id' => 25, 'city' => '函館市', 'address' => '若松町29-3', 'building' => '', 'instagram_url' => 'https://www.instagram.com/hamburgcafe', 'holiday' => '水曜日', 'business_hour' => '12:00-18:00', 'created_at' => date('Y-m-t'), 'updated_at' => date('Y-m-t'), 'created_user_id' => 1, 'updated_user_id' => 1],
            ['name' => 'LOFT HAKODATE', 'gender_id' => 1, 'prefecture_id' => 1, 'area_id' => 25, 'city' => '函館市', 'address' => '末広町4-11', 'building' => '', 'instagram_url' => 'https://www.instagram.com/loft_hakodate', 'holiday' => '火、水', 'business_hour' => '12:00-19:00', 'created_at' => date('Y-m-t'), 'updated_at' => date('Y-m-t'), 'created_user_id' => 1, 'updated_user_id' => 1],
            ['name' => 'Trace', 'gender_id' => 1, 'prefecture_id' => 1, 'area_id' => 25, 'city' => '函館市', 'address' => '松風町16-17', 'building' => '', 'instagram_url' => 'https://www.instagram.com/tracebuaisou', 'holiday' => '月、火、木、金', 'business_hour' => '', 'created_at' => date('Y-m-t'), 'updated_at' => date('Y-m-t'), 'created_user_id' => 1, 'updated_user_id' => 1],
            ['name' => 'Little Brothers 函館', 'gender_id' => 1, 'prefecture_id' => 1, 'area_id' => 25, 'city' => '函館市', 'address' => '杉並町20-3', 'building' => '', 'instagram_url' => 'https://www.instagram.com/littlebrothers_hakodate', 'holiday' => '不定休', 'business_hour' => '12:00-19:00', 'created_at' => date('Y-m-t'), 'updated_at' => date('Y-m-t'), 'created_user_id' => 1, 'updated_user_id' => 1],
            ['name' => 'moonrise inc.', 'gender_id' => 1, 'prefecture_id' => 1, 'area_id' => 22, 'city' => '札幌市', 'address' => '中央区南3条西8丁目7番地', 'building' => '大洋ビル1階', 'instagram_url' => 'https://www.instagram.com/moonriseinc_official', 'holiday' => '', 'business_hour' => '12:00-20:00', 'created_at' => date('Y-m-t'), 'updated_at' => date('Y-m-t'), 'created_user_id' => 1, 'updated_user_id' => 1],
            ['name' => 'mauve', 'gender_id' => 1, 'prefecture_id' => 1, 'area_id' => 22, 'city' => '札幌市', 'address' => '北区北6条西2丁目', 'building' => 'B1F', 'instagram_url' => 'https://www.instagram.com/mauve_sapporo', 'holiday' => '', 'business_hour' => '', 'created_at' => date('Y-m-t'), 'updated_at' => date('Y-m-t'), 'created_user_id' => 1, 'updated_user_id' => 1],
            ['name' => 'Yarn', 'gender_id' => 1, 'prefecture_id' => 1, 'area_id' => 22, 'city' => '札幌市', 'address' => '豊平区豊平5条3丁目1-1', 'building' => '', 'instagram_url' => 'https://www.instagram.com/yarn.sapporo', 'holiday' => '不定休', 'business_hour' => '13:00-21:00', 'created_at' => date('Y-m-t'), 'updated_at' => date('Y-m-t'), 'created_user_id' => 1, 'updated_user_id' => 1],
            ['name' => 'T-BONE VINTAGE', 'gender_id' => 1, 'prefecture_id' => 1, 'area_id' => 22, 'city' => '札幌市', 'address' => '中央区南2条西4丁目11', 'building' => 'PIVOTピヴォ 地下1階', 'instagram_url' => 'https://www.instagram.com/t_bone.vintage', 'holiday' => '', 'business_hour' => '', 'created_at' => date('Y-m-t'), 'updated_at' => date('Y-m-t'), 'created_user_id' => 1, 'updated_user_id' => 1],
            ['name' => 'mongos', 'gender_id' => 1, 'prefecture_id' => 1, 'area_id' => 22, 'city' => '札幌市', 'address' => '中央区南2条西7丁目1-5', 'building' => '2.7ビル3F', 'instagram_url' => 'https://www.instagram.com/mongos.sp', 'holiday' => '', 'business_hour' => '12:00-20:00', 'created_at' => date('Y-m-t'), 'updated_at' => date('Y-m-t'), 'created_user_id' => 1, 'updated_user_id' => 1],
            ['name' => 'Pichet', 'gender_id' => 2, 'prefecture_id' => 1, 'area_id' => 22, 'city' => '札幌市', 'address' => '北区北6条西2丁目', 'building' => 'paseo イーストB1F', 'instagram_url' => 'https://www.instagram.com/pichet.paseo', 'holiday' => '', 'business_hour' => '', 'created_at' => date('Y-m-t'), 'updated_at' => date('Y-m-t'), 'created_user_id' => 1, 'updated_user_id' => 1],
            ['name' => 'alternative', 'gender_id' => 1, 'prefecture_id' => 1, 'area_id' => 22, 'city' => '札幌市', 'address' => '豊平区平岸3条4丁目5-14', 'building' => 'プランコート平岸A', 'instagram_url' => 'https://www.instagram.com/alternative_hiragishi', 'holiday' => '', 'business_hour' => '12:00〜19:00', 'created_at' => date('Y-m-t'), 'updated_at' => date('Y-m-t'), 'created_user_id' => 1, 'updated_user_id' => 1],
            ['name' => '38clothing', 'gender_id' => 1, 'prefecture_id' => 1, 'area_id' => 22, 'city' => '札幌市', 'address' => '北区北19条西5丁目1-35', 'building' => 'メゾンドエルム1F', 'instagram_url' => 'https://www.instagram.com/38clothing', 'holiday' => '', 'business_hour' => '12:00~20:00', 'created_at' => date('Y-m-t'), 'updated_at' => date('Y-m-t'), 'created_user_id' => 1, 'updated_user_id' => 1],
            ['name' => 'neuf', 'gender_id' => 1, 'prefecture_id' => 1, 'area_id' => 22, 'city' => '札幌市', 'address' => '中央区南2条西4丁目11', 'building' => 'ダイビルpivot南館 B1', 'instagram_url' => 'https://www.instagram.com/_neuf_9', 'holiday' => '月曜', 'business_hour' => '12:00〜20:00', 'created_at' => date('Y-m-t'), 'updated_at' => date('Y-m-t'), 'created_user_id' => 1, 'updated_user_id' => 1],
            ['name' => 'Vieux VINTAGE', 'gender_id' => 2, 'prefecture_id' => 1, 'area_id' => 22, 'city' => '札幌市', 'address' => '中央区北5条西2丁目', 'building' => '札幌ステラプライス3F', 'instagram_url' => 'https://www.instagram.com/vieux_vintage', 'holiday' => '', 'business_hour' => '10:00-21:00', 'created_at' => date('Y-m-t'), 'updated_at' => date('Y-m-t'), 'created_user_id' => 1, 'updated_user_id' => 1],
            ['name' => 'Ms.HABERDASHERY', 'gender_id' => 2, 'prefecture_id' => 1, 'area_id' => 22, 'city' => '札幌市', 'address' => '中央区南１条西3-3', 'building' => '札幌PARCO3階', 'instagram_url' => 'https://www.instagram.com/ms.haberdashery', 'holiday' => '', 'business_hour' => '', 'created_at' => date('Y-m-t'), 'updated_at' => date('Y-m-t'), 'created_user_id' => 1, 'updated_user_id' => 1],
            ['name' => 'PHAT GRATS', 'gender_id' => 1, 'prefecture_id' => 1, 'area_id' => 26, 'city' => '釧路市', 'address' => '愛国東4丁目38-8', 'building' => '', 'instagram_url' => 'https://www.instagram.com/phat_grats', 'holiday' => '水曜日、木曜日', 'business_hour' => '12:00-19:30', 'created_at' => date('Y-m-t'), 'updated_at' => date('Y-m-t'), 'created_user_id' => 1, 'updated_user_id' => 1],
            ['name' => 'Wedge', 'gender_id' => 1, 'prefecture_id' => 1, 'area_id' => 26, 'city' => '釧路市', 'address' => '光陽町23-21', 'building' => '', 'instagram_url' => 'https://www.instagram.com/wedge946', 'holiday' => '', 'business_hour' => '12:00-20:00', 'created_at' => date('Y-m-t'), 'updated_at' => date('Y-m-t'), 'created_user_id' => 1, 'updated_user_id' => 1],
            ['name' => 'キッズマフィア', 'gender_id' => 1, 'prefecture_id' => 1, 'area_id' => 26, 'city' => '釧路市', 'address' => '浪花町5丁目1-1', 'building' => '', 'instagram_url' => '', 'holiday' => '', 'business_hour' => '12:00-20:00', 'created_at' => date('Y-m-t'), 'updated_at' => date('Y-m-t'), 'created_user_id' => 1, 'updated_user_id' => 1],
            ['name' => 'BIG BROTHER', 'gender_id' => 1, 'prefecture_id' => 1, 'area_id' => 26, 'city' => '釧路市', 'address' => '暁町1-4', 'building' => '', 'instagram_url' => '', 'holiday' => '', 'business_hour' => '12:00-19:00', 'created_at' => date('Y-m-t'), 'updated_at' => date('Y-m-t'), 'created_user_id' => 1, 'updated_user_id' => 1],
        ]);
    }
}