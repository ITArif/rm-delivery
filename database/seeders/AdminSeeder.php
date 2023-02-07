<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'first_name'=>'Arif',
            'last_name'=>'Islam',
            'email'=>'arif@gmail.com',
            'age'=>25,
            'gender'=>'Male',
            'district'=>'Dinajpur',
            'present_address'=>'Mirpur 2',
            'education'=>'BSC Engineering',
            'phone'=>'01723098090',
            'password'=>Hash::make('123456'),
            'status'=>1,
            'role'=>'admin',
            'created_at'=>'2022-09-25 12:54:08',
            'updated_at'=>'2022-09-25 12:54:08'
        ]);
    }
}
