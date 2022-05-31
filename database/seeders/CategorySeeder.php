<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category= array(
        array('category' => 'Alat Musik Petik'),
        array('category' => 'Alat Musik Pukul'),
        array('category' => 'Alat Musik Tiup')
        );

        DB::table('categories')->insert($category);

    }
}
