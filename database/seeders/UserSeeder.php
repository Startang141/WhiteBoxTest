<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user= array(
            array('name' => 'Bintang',
        'email' => 'bintang@gmail.com',
        'password' => Hash::make('password'),
        'address' => 'Trenggalek',
        'phone_number' => '081293345432',
        'gender' => 'L',
        'image' => 'bintang.jpg',
        'level_id' => '1',),
            array('name' => 'Aqua',
        'email' => 'aqua@gmail.com',
        'password' => Hash::make('aqua'),
        'address' => 'Malang',
        'phone_number' => '082231123321',
        'gender' => 'P',
        'image' => 'aqua.png',
        'level_id' => '2',),
            array('name' => 'Abdul Rahman',
        'email' => 'abdul@gmail.com',
        'password' => Hash::make('abdul'),
        'address' => 'Kediri',
        'phone_number' => '085213456753',
        'gender' => 'L',
        'image' => 'abdul.png',
        'level_id' => '2',),
            array('name' => 'Airin Okta',
        'email' => 'airin@gmail.com',
        'password' => Hash::make('airin'),
        'address' => 'Blitar',
        'phone_number' => '081294567384',
        'gender' => 'P',
        'image' => 'airin.png',
        'level_id' => '2',),
            array('name' => 'Betty Ang',
        'email' => 'betty@gmail.com',
        'password' => Hash::make('betty'),
        'address' => 'Nganjuk',
        'phone_number' => '085711234567',
        'gender' => 'P',
        'image' => 'betty.png',
        'level_id' => '2',),
            array('name' => 'Faiz Sadad',
        'email' => 'faiz@gmail.com',
        'password' => Hash::make('faiz'),
        'address' => 'Tulungagung',
        'phone_number' => '082398475647',
        'gender' => 'L',
        'image' => 'faiz.png',
        'level_id' => '2',),
        );

        DB::table('users')->insert($user);
    }
}
