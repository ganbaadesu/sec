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
            'gender'=>'male',
            'email'=>'admin@example.com',
            'usertype'=>'Admin',
            'phone'=>'+976-99999999',
            'picture'=>'sample',
            'password'=>Hash::make('123456'),
        ]);
        DB::table('users')->insert([
            'first_name'=>'Operator',
            'last_name'=>'Operator',
            'gender'=>'male',
            'email'=>'operator@example.com',
            'usertype'=>'Operator',
            'phone'=>'+976-99999999',
            'picture'=>'sample',
            'password'=>Hash::make('123456'),
        ]);
        DB::table('users')->insert([
            'first_name'=>'Account',
            'last_name'=>'Account',
            'gender'=>'male',
            'email'=>'account@example.com',
            'usertype'=>'Account',
            'phone'=>'+976-99999999',
            'picture'=>'sample',
            'password'=>Hash::make('123456'),
        ]);
        DB::table('users')->insert([
            'first_name'=>'Cnee',
            'last_name'=>'Cnee',
            'gender'=>'male',
            'email'=>'cnee@example.com',
            'usertype'=>'Cnee',
            'phone'=>'+976-99999999',
            'picture'=>'sample',
            'password'=>Hash::make('123456'),
        ]);
        DB::table('users')->insert([
            'first_name'=>'Shipper',
            'last_name'=>'Shipper',
            'gender'=>'male',
            'email'=>'shipper@example.com',
            'usertype'=>'Shipper',
            'phone'=>'+976-99999999',
            'picture'=>'sample',
            'password'=>Hash::make('123456'),
        ]);
    }
}
