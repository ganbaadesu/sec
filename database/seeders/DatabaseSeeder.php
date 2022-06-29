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
            'phone'=>'+976-99999999',
            'password'=>Hash::make('123456'),
        ]);
        DB::table('users')->insert([
            'name'=>'Operator',
            'email'=>'operator@example.com',
            'usertype'=>'operator',
            'phone'=>'+976-99999999',
            'password'=>Hash::make('123456'),
        ]);
        DB::table('users')->insert([
            'name'=>'Account',
            'email'=>'account@example.com',
            'usertype'=>'account',
            'phone'=>'+976-99999999',
            'password'=>Hash::make('123456'),
        ]);
        DB::table('users')->insert([
            'name'=>'Cnee',
            'email'=>'cnee@example.com',
            'usertype'=>'cnee',
            'phone'=>'+976-99999999',
            'password'=>Hash::make('123456'),
        ]);
        DB::table('users')->insert([
            'name'=>'Shipper',
            'email'=>'shipper@example.com',
            'usertype'=>'shipper',
            'phone'=>'+976-99999999',
            'password'=>Hash::make('123456'),
        ]);
        DB::table('permissions')->insert([
            'usertype' => 'operator',
            'permission' => json_encode(array('operator', 'account', 'cnee', 'shipper')),
        ]);
        DB::table('permissions')->insert([
            'usertype' => 'account'   ,
            'permission' => json_encode(array('account', 'cnee', 'shipper')),
        ]);
        DB::table('permissions')->insert([
            'usertype' => 'cnee'      ,
            'permission' => json_encode(array('cnee')),
        ]);
        DB::table('permissions')->insert([
            'usertype' => 'shipper'   ,
            'permission' => json_encode(array('shipper')),
        ]);
    }
}
