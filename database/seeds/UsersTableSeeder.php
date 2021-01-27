<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [

                'name' => 'Riya Deshmukh',
                'email' => 'riyan@gmail.com',
                'email_verified_at' => now(),
                'role_id'=> '2',
                'phone' => '1234060669',
                'password' => Hash::make('secret'),
                'created_at' => now(),
                'updated_at' => now()




            ],[
                'name' => 'Admin',
                'email' => 'admin@paper.com',
                'email_verified_at' => now(),
                'role_id'=> '1',
                'phone' => '1234560669',
                'password' => Hash::make('secret'),
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
