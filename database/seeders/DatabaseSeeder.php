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
            'first_name'=>'Admin',
            'last_name'=>'Admin',
            'email'=>'admin@example.com',
            'usertype'=>'Admin',
            'phone'=>'+976-99999999',
            'picture'=>'sample',
            'password'=>Hash::make('123456'),
        ]);
        DB::table('users')->insert([
            'first_name'=>'Operator',
            'last_name'=>'Operator',
            'email'=>'operator@example.com',
            'usertype'=>'Operator',
            'phone'=>'+976-99999999',
            'picture'=>'sample',
            'password'=>Hash::make('123456'),
        ]);
        DB::table('users')->insert([
            'first_name'=>'Account',
            'last_name'=>'Account',
            'email'=>'account@example.com',
            'usertype'=>'Account',
            'phone'=>'+976-99999999',
            'picture'=>'sample',
            'password'=>Hash::make('123456'),
        ]);
        DB::table('users')->insert([
            'first_name'=>'Cnee',
            'last_name'=>'Cnee',
            'email'=>'cnee@example.com',
            'usertype'=>'Cnee',
            'phone'=>'+976-99999999',
            'picture'=>'sample',
            'password'=>Hash::make('123456'),
        ]);
        DB::table('users')->insert([
            'first_name'=>'Shipper',
            'last_name'=>'Shipper',
            'email'=>'shipper@example.com',
            'usertype'=>'Shipper',
            'phone'=>'+976-99999999',
            'picture'=>'sample',
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
