<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use illuminate\Support\Str;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Adeku Ali',
            'email' => 'aliadeku.aam@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('Adeku'),
            'remember_token' => Str::random(10),
        ]);
    }
}
