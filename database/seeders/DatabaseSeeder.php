<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'=>'Admin',
            'email'=>'admin@example.com',
            'usertype'=>'admin',
            'profile'=>'images/profile/profile.png',
            'phone'=>'+976-99999999',
            'password'=>Hash::make('123456'),
        ]);
        DB::table('users')->insert([
            'name'=>'Operator',
            'email'=>'operator@example.com',
            'usertype'=>'operator',
            'profile'=>'images/profile/profile.png',
            'phone'=>'+976-99999999',
            'password'=>Hash::make('123456'),
        ]);
        DB::table('users')->insert([
            'name'=>'Account',
            'email'=>'account@example.com',
            'usertype'=>'account',
            'profile'=>'images/profile/profile.png',
            'phone'=>'+976-99999999',
            'password'=>Hash::make('123456'),
        ]);
        DB::table('users')->insert([
            'name'=>'Cnee',
            'email'=>'cnee@example.com',
            'usertype'=>'cnee',
            'profile'=>'images/profile/profile.png',
            'phone'=>'+976-99999999',
            'password'=>Hash::make('123456'),
        ]);
        DB::table('users')->insert([
            'name'=>'Shipper',
            'email'=>'shipper@example.com',
            'usertype'=>'shipper',
            'profile'=>'images/profile/profile.png',
            'phone'=>'+976-99999999',
            'password'=>Hash::make('123456'),
        ]);
        DB::table('permissions')->insert([
            'usertype' => 'operator',
            'permission' => json_encode(array('RefNo', 'BINo', 'CntrNo', 'CntrType')),
        ]);
        DB::table('permissions')->insert([
            'usertype' => 'account'   ,
            'permission' => json_encode(array('RefNo', 'BINo', 'CntrNo')),
        ]);
        DB::table('permissions')->insert([
            'usertype' => 'cnee'      ,
            'permission' => json_encode(array('RefNo')),
        ]);
        DB::table('permissions')->insert([
            'usertype' => 'shipper'   ,
            'permission' => json_encode(array('Shipper')),
        ]);
    }
}
