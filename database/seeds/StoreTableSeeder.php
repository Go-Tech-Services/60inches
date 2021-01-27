<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class StoreTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('store_info')->insert([
        [
            'owner_name' => 'Ayan',
            'email' => 'Ayan@gmail.com',
            'store_address' => 'Jalgaon',
            'password' => Hash::make('secret'),
            'store_name' => 'Ayan Creations',
            'phone' => '1234567569',
            'store_logo' => 'Store_creation.png',
            'role_id'=> '2',
            'url' => 'Ayan-P',
            'created_at' => now(),
            'updated_at' => now()

        ], [
            'owner_name' => 'Anisha Patil',
            'email' => 'Anisha@gmail.comr.com',
            'store_address' => 'Pune',
            'password' => Hash::make('secret'),
            'store_name' => 'Aarohi Creations',
            'phone' => '1234567669',
            'role_id'=> '2',
            'store_logo' => 'admin_creation.png',
            'url' => 'Anisha-Patil',
            'created_at' => now(),
            'updated_at' => now()
        ]

        ]
    );
    }
}
