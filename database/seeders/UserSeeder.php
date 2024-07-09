<?php

namespace Database\Seeders;

use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'Guest',
            'isAdmin' => false,
            'email' => 'guest@guest.com',
            'password' => Hash::make('guest'),
            'created_at' => Carbon::now(3)->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now(3)->format('Y-m-d H:i:s')
        ]);
        DB::table('users')->insert([
            'name' => 'Admin',
            'isAdmin' => true,
            'email' => 'admin@admin.com',
            'password' => Hash::make('12345678'),
            'created_at' => Carbon::now(3)->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now(3)->format('Y-m-d H:i:s')
        ]);
    }
}
