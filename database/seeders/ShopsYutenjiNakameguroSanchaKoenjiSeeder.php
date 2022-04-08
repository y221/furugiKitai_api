<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ShopsYutenjiNakameguroSanchaKoenjiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('shops')->insert([
            ['name' => 'archeologie', 'gender_id' => 1, 'prefecture_id' => 13, 'area_id' => 18, 'city' => '目黒区', 'address' => '中町2-48-25', 'building' => 'サンハイム祐天寺101', 'instagram_url' => 'https://www.instagram.com/archeologie_yutenji', 'holiday' => '', 'business_hour' => '平日祝 15:00-23:00 土 15:00-24:00'],
            ['name' => 'ARMS CLOTHING STORE', 'gender_id' => 1, 'prefecture_id' => 13, 'area_id' => 18, 'city' => '目黒区', 'address' => '祐天寺2-12-1', 'building' => 'PLAZA U202', 'instagram_url' => 'https://www.instagram.com/armsclothingstore', 'holiday' => '', 'business_hour' => '月~土 15:00-0:00 日 15:00-23:00'],
            ['name' => 'Varde77', 'gender_id' => 3, 'prefecture_id' => 13, 'area_id' => 18, 'city' => '目黒区', 'address' => '祐天寺2-3-11', 'building' => '', 'instagram_url' => 'https://www.instagram.com/varde77', 'holiday' => '', 'business_hour' => ''],
            ['name' => 'MESEN-TIP', 'gender_id' => 3, 'prefecture_id' => 13, 'area_id' => 18, 'city' => '目黒区', 'address' => '祐天寺2-8-10', 'building' => 'ロジュマン祐天寺1F', 'instagram_url' => 'https://www.instagram.com/mesentip', 'holiday' => '', 'business_hour' => ''],
            ['name' => 'feets', 'gender_id' => 3, 'prefecture_id' => 13, 'area_id' => 18, 'city' => '目黒区', 'address' => '祐天寺2-4-10', 'building' => '', 'instagram_url' => 'https://www.instagram.com/feets_yutenji', 'holiday' => '', 'business_hour' => '13:00-20:00'],
            ['name' => 'JANTIQUES', 'gender_id' => 1, 'prefecture_id' => 13, 'area_id' => 4, 'city' => '目黒区', 'address' => '上目黒2-25-13', 'building' => '', 'instagram_url' => 'https://www.instagram.com/jantiques.nakameguro', 'holiday' => '', 'business_hour' => '12:00〜19:00'],
            ['name' => 'DROP', 'gender_id' => 1, 'prefecture_id' => 13, 'area_id' => 4, 'city' => '目黒区', 'address' => '青葉台1-15-5', 'building' => '', 'instagram_url' => 'https://www.instagram.com/tokyo_drop', 'holiday' => '', 'business_hour' => '13:00-19:00'],
            ['name' => 'TOKYO LAMPOON / EREVA', 'gender_id' => 2, 'prefecture_id' => 13, 'area_id' => 4, 'city' => '目黒区', 'address' => '上目黒1-7-6', 'building' => '', 'instagram_url' => 'https://www.instagram.com/tokyolampoon_ereva', 'holiday' => '不定休', 'business_hour' => '13:00-19:00'],
            ['name' => 'Leah-K Nakameguro', 'gender_id' => 2, 'prefecture_id' => 13, 'area_id' => 4, 'city' => '目黒区', 'address' => '青葉台1-25-2', 'building' => '', 'instagram_url' => 'https://www.instagram.com/leahkleahk', 'holiday' => '', 'business_hour' => ''],
            ['name' => '&Dorothy', 'gender_id' => 2, 'prefecture_id' => 13, 'area_id' => 4, 'city' => '目黒区', 'address' => '上目黒2-14-2', 'building' => '', 'instagram_url' => 'https://www.instagram.com/anddorothy', 'holiday' => '', 'business_hour' => '12:00-20:00'],
            ['name' => 'Cider', 'gender_id' => 1, 'prefecture_id' => 13, 'area_id' => 4, 'city' => '目黒区', 'address' => '上目黒1-2-9', 'building' => 'ハイネス中目黒104号', 'instagram_url' => '', 'holiday' => '', 'business_hour' => ''],
            ['name' => 'DEPT TOKYO', 'gender_id' => 2, 'prefecture_id' => 13, 'area_id' => 4, 'city' => '目黒区', 'address' => '青葉台1-13-12', 'building' => '', 'instagram_url' => 'https://www.instagram.com/d_e_p_t', 'holiday' => '', 'business_hour' => ''],
            ['name' => 'HOLIDAY WORKS 中目黒店', 'gender_id' => 2, 'prefecture_id' => 13, 'area_id' => 4, 'city' => '目黒区', 'address' => '青葉台1-13-11', 'building' => 'B1F', 'instagram_url' => 'https://www.instagram.com/holidayworks_nakameguro', 'holiday' => '', 'business_hour' => '13:00-20:00'],
            ['name' => 'HOLIDAY WORKS 祐天寺店', 'gender_id' => 2, 'prefecture_id' => 13, 'area_id' => 18, 'city' => '目黒区', 'address' => '祐天寺2-6-11', 'building' => '', 'instagram_url' => 'https://www.instagram.com/holidayworks', 'holiday' => '', 'business_hour' => '13:00-21:00'],
            ['name' => 'mAnchies', 'gender_id' => 1, 'prefecture_id' => 13, 'area_id' => 4, 'city' => '目黒区', 'address' => '上目黒1-15-7', 'building' => 'B1F', 'instagram_url' => 'https://www.instagram.com/manchies_nakameguro', 'holiday' => '火曜日', 'business_hour' => ''],
            ['name' => 'EVERGREEN', 'gender_id' => 2, 'prefecture_id' => 13, 'area_id' => 4, 'city' => '目黒区', 'address' => '上目黒2-44-10', 'building' => '', 'instagram_url' => '', 'holiday' => '', 'business_hour' => '13:00-20:00'],
            ['name' => 'LOCO', 'gender_id' => 1, 'prefecture_id' => 13, 'area_id' => 4, 'city' => '目黒区', 'address' => '上目黒2-40-28', 'building' => 'サンバレイ中目黒1F', 'instagram_url' => 'https://www.instagram.com/loco_nakameguro', 'holiday' => '', 'business_hour' => '14:00-19:00'],
            ['name' => 'Tam', 'gender_id' => 1, 'prefecture_id' => 13, 'area_id' => 6, 'city' => '目黒区', 'address' => '青葉台3-7-10', 'building' => 'クロスワン101', 'instagram_url' => 'https://www.instagram.com/tam_nakameguro', 'holiday' => '', 'business_hour' => ''],
            ['name' => 'BANK', 'gender_id' => 1, 'prefecture_id' => 13, 'area_id' => 6, 'city' => '世田谷区', 'address' => '三軒茶屋1-36-3', 'building' => '102', 'instagram_url' => 'https://www.instagram.com/nico.bank', 'holiday' => '', 'business_hour' => '平日 16:00-24:00 土日祝 15:00-24:00'],
            ['name' => 'HAg-Le', 'gender_id' => 1, 'prefecture_id' => 13, 'area_id' => 6, 'city' => '世田谷区', 'address' => '池尻4-39-6', 'building' => '1F', 'instagram_url' => 'https://www.instagram.com/hagle_vintage', 'holiday' => '', 'business_hour' => '平日 15:00-20:00 土日祝 13:00-20:00'],
            ['name' => 'THREE', 'gender_id' => 1, 'prefecture_id' => 13, 'area_id' => 6, 'city' => '世田谷区', 'address' => '三軒茶屋1-7-12', 'building' => 'フタミビル 2F', 'instagram_url' => 'https://www.instagram.com/three0511', 'holiday' => '', 'business_hour' => '15:00-24:00'],
            ['name' => 'LUIK', 'gender_id' => 2, 'prefecture_id' => 13, 'area_id' => 6, 'city' => '世田谷区', 'address' => '太子堂2-36-9', 'building' => '下の谷ハマーハイツ1F', 'instagram_url' => 'https://www.instagram.com/luik0121', 'holiday' => '金曜日', 'business_hour' => 'weekday: 13:00-18:00 weekend & holiday: 13:00-20:00'],
            ['name' => 'NOIR', 'gender_id' => 1, 'prefecture_id' => 13, 'area_id' => 6, 'city' => '世田谷区', 'address' => '三軒茶屋1-35-3', 'building' => 'MTビル 1F', 'instagram_url' => 'https://www.instagram.com/noir120317', 'holiday' => '', 'business_hour' => '15:00-22:00'],
            ['name' => 'Ecle. ', 'gender_id' => 1, 'prefecture_id' => 13, 'area_id' => 6, 'city' => '世田谷区', 'address' => '三軒茶屋1-35-27', 'building' => '', 'instagram_url' => 'https://www.instagram.com/ecle_vintage', 'holiday' => '水曜日', 'business_hour' => 'Mon-Fri 15:00-22:00 Sat, Sun 13:00-20:00'],
            ['name' => 'ROSE VINTAGE', 'gender_id' => 2, 'prefecture_id' => 13, 'area_id' => 6, 'city' => '世田谷区', 'address' => '池尻2-8-5', 'building' => '上田ビル 1F', 'instagram_url' => 'https://www.instagram.com/rosejapon', 'holiday' => '', 'business_hour' => 'Mon-Sun 14:00〜21:00'],
            ['name' => 'ZIG', 'gender_id' => 1, 'prefecture_id' => 13, 'area_id' => 6, 'city' => '世田谷区', 'address' => '太子堂3-18-6', 'building' => '', 'instagram_url' => 'https://www.instagram.com/zig_usedclothing', 'holiday' => '', 'business_hour' => '15:00-22:00'],
            ['name' => 'THRIFT SHOP ROOM', 'gender_id' => 1, 'prefecture_id' => 13, 'area_id' => 6, 'city' => '世田谷区', 'address' => '三軒茶屋1-36-5', 'building' => '', 'instagram_url' => 'https://www.instagram.com/thriftshoproom', 'holiday' => '', 'business_hour' => '13:00-21:00'],
            ['name' => 'Miller Time', 'gender_id' => 1, 'prefecture_id' => 13, 'area_id' => 6, 'city' => '世田谷区', 'address' => '太子堂4-5-2', 'building' => '', 'instagram_url' => 'https://www.instagram.com/millertime3cha', 'holiday' => '', 'business_hour' => ''],
            ['name' => '古着の一善', 'gender_id' => 1, 'prefecture_id' => 13, 'area_id' => 6, 'city' => '世田谷区', 'address' => '上馬1-31-8', 'building' => '', 'instagram_url' => 'https://www.instagram.com/ichizen_sangenjaya', 'holiday' => '雨天休業', 'business_hour' => '20:00〜27:00 25時までかも'],
            ['name' => 'The Light', 'gender_id' => 1, 'prefecture_id' => 13, 'area_id' => 6, 'city' => '世田谷区', 'address' => '三軒茶屋1-36-3', 'building' => '203', 'instagram_url' => 'https://www.instagram.com/the_light_tokyo', 'holiday' => '', 'business_hour' => '14:00-21:00'],
            ['name' => 'ANAME', 'gender_id' => 3, 'prefecture_id' => 13, 'area_id' => 17, 'city' => '杉並区', 'address' => '高円寺南4-44-3', 'building' => '1F', 'instagram_url' => '', 'holiday' => '', 'business_hour' => '14:00-20:00'],
            ['name' => 'anemone', 'gender_id' => 1, 'prefecture_id' => 13, 'area_id' => 17, 'city' => '杉並区', 'address' => '高円寺南3-56-1', 'building' => '', 'instagram_url' => 'https://www.instagram.com/anemone_kouenji', 'holiday' => '', 'business_hour' => '13:00-20:00'],
            ['name' => 'Albatross', 'gender_id' => 1, 'prefecture_id' => 13, 'area_id' => 17, 'city' => '杉並区', 'address' => '高円寺南3-46-9', 'building' => '', 'instagram_url' => 'https://www.instagram.com/albatross_koenji', 'holiday' => '', 'business_hour' => '12:30-20:30'],
            ['name' => 'Albatross 2nd', 'gender_id' => 1, 'prefecture_id' => 13, 'area_id' => 17, 'city' => '杉並区', 'address' => '高円寺南4-6-1', 'building' => '2F', 'instagram_url' => 'https://www.instagram.com/albatross2nd_koenji', 'holiday' => '', 'business_hour' => '平日 12:30-19:30 土日祝日 12:30-20:00'],
            ['name' => 'Armajilo', 'gender_id' => 1, 'prefecture_id' => 13, 'area_id' => 17, 'city' => '杉並区', 'address' => '高円寺南3-57-1', 'building' => '2F', 'instagram_url' => 'https://www.instagram.com/armajilo_tokyo', 'holiday' => '', 'business_hour' => '12:00-20:00'],
            ['name' => 'encore', 'gender_id' => 1, 'prefecture_id' => 13, 'area_id' => 17, 'city' => '杉並区', 'address' => '高円寺南3-56-1', 'building' => '', 'instagram_url' => 'https://www.instagram.com/encore_boutique', 'holiday' => '', 'business_hour' => '14:00-20:00'],
            ['name' => 'Antler', 'gender_id' => 1, 'prefecture_id' => 13, 'area_id' => 17, 'city' => '杉並区', 'address' => '高円寺南2-50-10', 'building' => '', 'instagram_url' => 'https://www.instagram.com/antler_koenji', 'holiday' => '', 'business_hour' => '13:00-20:00'],
            ['name' => 'WHISTLER chart', 'gender_id' => 1, 'prefecture_id' => 13, 'area_id' => 17, 'city' => '杉並区', 'address' => '高円寺南4-30-8', 'building' => 'ミサトビル101', 'instagram_url' => 'https://www.instagram.com/whistler_chart', 'holiday' => '', 'business_hour' => '12:00-21:00'],
            ['name' => 'OTSU', 'gender_id' => 3, 'prefecture_id' => 13, 'area_id' => 17, 'city' => '杉並区', 'address' => '高円寺南3-57-5', 'building' => '', 'instagram_url' => 'https://www.instagram.com/otsukoenji', 'holiday' => '', 'business_hour' => '12:30 - 20:30'],
            ['name' => '温古着新', 'gender_id' => 1, 'prefecture_id' => 13, 'area_id' => 17, 'city' => '杉並区', 'address' => '高円寺南3−23−16', 'building' => '水喜ビル1F', 'instagram_url' => 'https://www.instagram.com/onkokishin', 'holiday' => '', 'business_hour' => '13:00-21:00'],
            ['name' => 'GASOLINE', 'gender_id' => 3, 'prefecture_id' => 13, 'area_id' => 17, 'city' => '杉並区', 'address' => '高円寺南4-29-12', 'building' => 'KAWABE272ビル101', 'instagram_url' => 'https://www.instagram.com/gasoline.slick.back', 'holiday' => '火曜日', 'business_hour' => '13:00-20:00'],
            ['name' => '川', 'gender_id' => 3, 'prefecture_id' => 13, 'area_id' => 17, 'city' => '杉並区', 'address' => '高円寺南4-9-2', 'building' => '第2矢島ビル1F', 'instagram_url' => 'https://www.instagram.com/kawa_vintage', 'holiday' => '', 'business_hour' => '13:00-20:00'],
            ['name' => 'Kissmet', 'gender_id' => 3, 'prefecture_id' => 13, 'area_id' => 17, 'city' => '杉並区', 'address' => '高円寺南3-56-1', 'building' => '101', 'instagram_url' => 'https://www.instagram.com/kissmet.kouenji', 'holiday' => '', 'business_hour' => '平日14:00〜20:00 土日祝13:00〜20:00'],
            ['name' => 'CUBA', 'gender_id' => 3, 'prefecture_id' => 13, 'area_id' => 17, 'city' => '杉並区', 'address' => '高円寺南3-45-10', 'building' => '', 'instagram_url' => 'https://www.instagram.com/cuba.koenji', 'holiday' => '', 'business_hour' => '12:30-20:30'],
            ['name' => 'cravittra', 'gender_id' => 1, 'prefecture_id' => 13, 'area_id' => 17, 'city' => '杉並区', 'address' => '高円寺南4-23-4', 'building' => '', 'instagram_url' => 'https://www.instagram.com/cravittra', 'holiday' => '', 'business_hour' => '13:00-20:00'],
            ['name' => 'Grandberry Jam', 'gender_id' => 1, 'prefecture_id' => 13, 'area_id' => 17, 'city' => '杉並区', 'address' => '高円寺南4-7-1', 'building' => '藤和シティコープ102', 'instagram_url' => 'https://www.instagram.com/grandberryjam', 'holiday' => '', 'business_hour' => '13:00-20:00'],
            ['name' => 'GREEN LIGHT', 'gender_id' => 1, 'prefecture_id' => 13, 'area_id' => 17, 'city' => '杉並区', 'address' => '高円寺南4-28-11', 'building' => '', 'instagram_url' => 'https://www.instagram.com/green_light_koenji', 'holiday' => '', 'business_hour' => '12:00-20:00'],
            ['name' => '黒BENZ', 'gender_id' => 1, 'prefecture_id' => 13, 'area_id' => 17, 'city' => '杉並区', 'address' => '高円寺南4-24-12', 'building' => '', 'instagram_url' => 'https://www.instagram.com/clobenz_official', 'holiday' => '', 'business_hour' => '13:00-20:00'],
            ['name' => 'CORD', 'gender_id' => 3, 'prefecture_id' => 13, 'area_id' => 17, 'city' => '杉並区', 'address' => '高円寺南4-24-9', 'building' => '高円寺中央ビル203', 'instagram_url' => 'https://www.instagram.com/cord_tokyo', 'holiday' => '', 'business_hour' => '13:00-19:00'],
            ['name' => 'SAFARI 1号店', 'gender_id' => 1, 'prefecture_id' => 13, 'area_id' => 17, 'city' => '杉並区', 'address' => '高円寺南3-57-4', 'building' => '', 'instagram_url' => 'https://www.instagram.com/safari_kouenji', 'holiday' => '', 'business_hour' => '13:00-20:00'],
            ['name' => 'SAFARI 2号店', 'gender_id' => 1, 'prefecture_id' => 13, 'area_id' => 17, 'city' => '杉並区', 'address' => '高円寺南3-47-8', 'building' => '', 'instagram_url' => 'https://www.instagram.com/safari_kouenji2', 'holiday' => '', 'business_hour' => '13:00-20:00'],
            ['name' => 'SAFARI 3号店', 'gender_id' => 1, 'prefecture_id' => 13, 'area_id' => 17, 'city' => '杉並区', 'address' => '高円寺南4-7-3', 'building' => '', 'instagram_url' => 'https://www.instagram.com/safari_kouenji_3', 'holiday' => '', 'business_hour' => '13:00-20:00'],
            ['name' => 'SAFARI 4号店', 'gender_id' => 1, 'prefecture_id' => 13, 'area_id' => 17, 'city' => '杉並区', 'address' => '高円寺南3-45-12', 'building' => '', 'instagram_url' => 'https://www.instagram.com/safari_kouenji_4', 'holiday' => '', 'business_hour' => '13:00-20:00'],
            ['name' => 'SAFARI 5号店', 'gender_id' => 1, 'prefecture_id' => 13, 'area_id' => 17, 'city' => '杉並区', 'address' => '高円寺南4-6-2', 'building' => '2F', 'instagram_url' => 'https://www.instagram.com/safari_kouenji5', 'holiday' => '', 'business_hour' => '13:00-20:00'],
            ['name' => 'LONGABU', 'gender_id' => 1, 'prefecture_id' => 13, 'area_id' => 17, 'city' => '杉並区', 'address' => '高円寺南4-34-10', 'building' => '', 'instagram_url' => 'https://www.instagram.com/longabukoenji', 'holiday' => '', 'business_hour' => '13:00-20:00'],
            ['name' => 'The words', 'gender_id' => 1, 'prefecture_id' => 13, 'area_id' => 17, 'city' => '杉並区', 'address' => '高円寺南3-45-9', 'building' => '', 'instagram_url' => 'https://www.instagram.com/the_words.jp', 'holiday' => '', 'business_hour' => '13:00-20:00'],
            ['name' => 'suntrap', 'gender_id' => 1, 'prefecture_id' => 13, 'area_id' => 17, 'city' => '杉並区', 'address' => '高円寺南4-23-5', 'building' => '', 'instagram_url' => 'https://www.instagram.com/suntraptokyo', 'holiday' => '', 'business_hour' => '平日 13:00-21:00 土日祝 12:00-20:30'],
            ['name' => "Jacob's Ladder", 'gender_id' => 1, 'prefecture_id' => 13, 'area_id' => 17, 'city' => '杉並区', 'address' => '高円寺南2-22-13', 'building' => '', 'instagram_url' => 'https://www.instagram.com/jacobsladdervintage', 'holiday' => '', 'business_hour' => '13:00-20:00'],
            ['name' => 'SHINTO', 'gender_id' => 1, 'prefecture_id' => 13, 'area_id' => 17, 'city' => '杉並区', 'address' => '高円寺南4-29-9', 'building' => '第3穴吹ビル1F', 'instagram_url' => 'https://www.instagram.com/shinto_kouenji', 'holiday' => '', 'business_hour' => '13:00-20:00'],
            ['name' => 'SUPER OLD', 'gender_id' => 1, 'prefecture_id' => 13, 'area_id' => 17, 'city' => '杉並区', 'address' => '高円寺南4-22-1', 'building' => '', 'instagram_url' => 'https://www.instagram.com/wasabi_koenji', 'holiday' => '', 'business_hour' => '13:00-20:00'],
            ['name' => 'SKROVA', 'gender_id' => 1, 'prefecture_id' => 13, 'area_id' => 17, 'city' => '杉並区', 'address' => '高円寺南4-21-6', 'building' => '', 'instagram_url' => 'https://www.instagram.com/skrova_koenji', 'holiday' => '', 'business_hour' => '13:00-20:00'],
            ['name' => 'zuccaro', 'gender_id' => 1, 'prefecture_id' => 13, 'area_id' => 17, 'city' => '杉並区', 'address' => '高円寺南3-48-6', 'building' => '', 'instagram_url' => 'https://www.instagram.com/zuccaro_japan_kouenji', 'holiday' => '', 'business_hour' => '13:00-20:00'],
            ['name' => 'STEP AHEAD', 'gender_id' => 1, 'prefecture_id' => 13, 'area_id' => 17, 'city' => '杉並区', 'address' => '高円寺南3-58-29', 'building' => '', 'instagram_url' => 'https://www.instagram.com/stepahead_koenji', 'holiday' => '', 'business_hour' => '12:00-20:00'],
            ['name' => 'SLUT', 'gender_id' => 1, 'prefecture_id' => 13, 'area_id' => 17, 'city' => '杉並区', 'address' => '高円寺南4-6-1', 'building' => '', 'instagram_url' => 'https://www.instagram.com/slat_vintage_clothing', 'holiday' => '', 'business_hour' => '12:30-20:30'],
            ['name' => 'SLUT 2nd', 'gender_id' => 1, 'prefecture_id' => 13, 'area_id' => 17, 'city' => '杉並区', 'address' => '高円寺南4-28-8', 'building' => '', 'instagram_url' => 'https://www.instagram.com/slat_2nd_vintage', 'holiday' => '', 'business_hour' => '平日12:30-19:30 休日12:30-20:00'],
            ['name' => 'SALERS', 'gender_id' => 1, 'prefecture_id' => 13, 'area_id' => 17, 'city' => '杉並区', 'address' => '高円寺南4-22-2', 'building' => 'フジビル1F', 'instagram_url' => 'https://www.instagram.com/salerstokyo', 'holiday' => '', 'business_hour' => '12:00-20:00'],
            ['name' => 'S.O', 'gender_id' => 1, 'prefecture_id' => 13, 'area_id' => 17, 'city' => '杉並区', 'address' => '高円寺南4-30-5', 'building' => '', 'instagram_url' => 'https://www.instagram.com/soso6012', 'holiday' => '', 'business_hour' => '12:00-20:00'],
            ['name' => 'Chago Chago BOUTIQUE & RICUR', 'gender_id' => 1, 'prefecture_id' => 13, 'area_id' => 17, 'city' => '杉並区', 'address' => '高円寺南4-9-3', 'building' => '201', 'instagram_url' => 'https://www.instagram.com/chago_chago_boutique_and_ricur', 'holiday' => '', 'business_hour' => '13:00-20:00'],
            ['name' => 'D clothing', 'gender_id' => 3, 'prefecture_id' => 13, 'area_id' => 17, 'city' => '杉並区', 'address' => '高円寺南4-8-6', 'building' => '', 'instagram_url' => 'https://www.instagram.com/dclothingkoenji', 'holiday' => '', 'business_hour' => '13:00-20:00'],
            ['name' => 'HURRY UP', 'gender_id' => 1, 'prefecture_id' => 13, 'area_id' => 17, 'city' => '杉並区', 'address' => '高円寺南4-21-4', 'building' => '1F', 'instagram_url' => 'https://www.instagram.com/hurryup_koenji', 'holiday' => '', 'business_hour' => '13:00-19:00'],
            ['name' => 'Fizz', 'gender_id' => 1, 'prefecture_id' => 13, 'area_id' => 17, 'city' => '杉並区', 'address' => '高円寺南3-46-3', 'building' => '', 'instagram_url' => 'https://www.instagram.com/fizz_vintage', 'holiday' => '', 'business_hour' => '平日 13:30-19:00 土日祝 12:30-19:00'],
            ['name' => 'FIFTY-FIFTY', 'gender_id' => 1, 'prefecture_id' => 13, 'area_id' => 17, 'city' => '杉並区', 'address' => '高円寺南4-29-14', 'building' => '', 'instagram_url' => 'https://www.instagram.com/fifty_fifty_works', 'holiday' => '', 'business_hour' => '12:30-20:00(Sat: -20:30)'],
            ['name' => 'FERANTRACING', 'gender_id' => 1, 'prefecture_id' => 13, 'area_id' => 17, 'city' => '中野区', 'address' => '大和町1-30-7', 'building' => '', 'instagram_url' => 'https://www.instagram.com/ferantracing', 'holiday' => '不定休', 'business_hour' => '10:00-20:00'],
            ['name' => '古着屋 深緑', 'gender_id' => 1, 'prefecture_id' => 13, 'area_id' => 17, 'city' => '杉並区', 'address' => '高円寺南4-24-4', 'building' => '2F', 'instagram_url' => 'https://www.instagram.com/fukamidori__', 'holiday' => '', 'business_hour' => '13:00-21:00'],
            ['name' => 'BROTHER', 'gender_id' => 1, 'prefecture_id' => 13, 'area_id' => 17, 'city' => '杉並区', 'address' => '高円寺南3-44-14', 'building' => '', 'instagram_url' => 'https://www.instagram.com/brother.kouenji', 'holiday' => '', 'business_hour' => 'MonｰFri 13:00-19:00 Sat.Sun 12:30-20:00'],
            ['name' => 'PAPER MOON', 'gender_id' => 1, 'prefecture_id' => 13, 'area_id' => 17, 'city' => '杉並区', 'address' => '高円寺南3-46-5', 'building' => '3F', 'instagram_url' => '', 'holiday' => '', 'business_hour' => '11:00-21:00'],
            ['name' => 'mouse', 'gender_id' => 2, 'prefecture_id' => 13, 'area_id' => 17, 'city' => '杉並区', 'address' => '高円寺南4-28-11', 'building' => 'B1', 'instagram_url' => 'https://www.instagram.com/mouse_koenji', 'holiday' => '', 'business_hour' => '13:00-20:00'],
            ['name' => 'militaria', 'gender_id' => 1, 'prefecture_id' => 13, 'area_id' => 17, 'city' => '杉並区', 'address' => '高円寺南3-57-3', 'building' => '', 'instagram_url' => 'https://www.instagram.com/militaria_tokyo', 'holiday' => '', 'business_hour' => '14:00-20:00'],
            ['name' => 'メチャ', 'gender_id' => 1, 'prefecture_id' => 13, 'area_id' => 17, 'city' => '杉並区', 'address' => '高円寺南4-28-7', 'building' => 'Jビル4F', 'instagram_url' => 'https://www.instagram.com/mecha_vintage', 'holiday' => '', 'business_hour' => '14:00-21:00'],
            ['name' => 'RUGGED', 'gender_id' => 1, 'prefecture_id' => 13, 'area_id' => 17, 'city' => '杉並区', 'address' => '高円寺南4-24-5', 'building' => '', 'instagram_url' => 'https://www.instagram.com/rugged_tokyo', 'holiday' => '', 'business_hour' => '12:00-20:00'],
            ['name' => 'LAUGH', 'gender_id' => 1, 'prefecture_id' => 13, 'area_id' => 17, 'city' => '杉並区', 'address' => '高円寺南4-29-8', 'building' => '', 'instagram_url' => 'https://www.instagram.com/laugh_koenji', 'holiday' => '', 'business_hour' => '月~金14:00-20:00 土日祝13:00-20:00'],
            ['name' => "Re'all", 'gender_id' => 1, 'prefecture_id' => 13, 'area_id' => 17, 'city' => '杉並区', 'address' => '高円寺南4-29−13', 'building' => '', 'instagram_url' => 'https://www.instagram.com/reall_koenji', 'holiday' => '', 'business_hour' => '平日 13:00-20:00 土日祝 12:00-20-00'],
            ['name' => 'liberal', 'gender_id' => 1, 'prefecture_id' => 13, 'area_id' => 17, 'city' => '杉並区', 'address' => '高円寺南3-48-4', 'building' => '', 'instagram_url' => 'https://www.instagram.com/liberal_koenji', 'holiday' => '', 'business_hour' => '13:00-20:00'],
            ['name' => 'Replay', 'gender_id' => 1, 'prefecture_id' => 13, 'area_id' => 17, 'city' => '杉並区', 'address' => '高円寺南3-56-1', 'building' => '', 'instagram_url' => 'https://www.instagram.com/replay_koenji', 'holiday' => '', 'business_hour' => '12:00-20:00'],
            ['name' => 'leger', 'gender_id' => 1, 'prefecture_id' => 13, 'area_id' => 17, 'city' => '杉並区', 'address' => '高円寺南4-24-4', 'building' => '', 'instagram_url' => 'https://www.instagram.com/leger1202', 'holiday' => '火曜日', 'business_hour' => '13:00-20:00'],
            ['name' => 'RENGA', 'gender_id' => 1, 'prefecture_id' => 13, 'area_id' => 17, 'city' => '杉並区', 'address' => '高円寺南4-39-9', 'building' => '', 'instagram_url' => 'https://www.instagram.com/renga_tokyo', 'holiday' => '', 'business_hour' => '14:00-21:00'],
            ['name' => 'ROIR', 'gender_id' => 1, 'prefecture_id' => 13, 'area_id' => 17, 'city' => '杉並区', 'address' => '高円寺南3-46-5', 'building' => '後藤ビル203', 'instagram_url' => 'https://www.instagram.com/roir_tokyo', 'holiday' => '', 'business_hour' => '13:00-20:00'],
        ]);
    }
}
