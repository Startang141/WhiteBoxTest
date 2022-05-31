<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $level= array(
            array('level' => 'admin'),
            array('level' => 'user')
        );

        DB::table('levels')->insert($level);
    }
}
