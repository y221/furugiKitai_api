<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GenderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('genders')->insert([
            ['gender' => 'レディース・メンズ'],
            ['gender' => 'レディース'],
            ['gender' => 'メンズ']
        ]);
    }
}
