<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class Lexa extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $currentDate = Carbon::now();
        DB::table('users')->insert([
            'name' => 'Леха',
            'surname' => 'Смирнов',
            'profile_photo' => 'default_photo.svg',
            'email' => 'myEmail@gmail.com',
            'phone_number' => '88005553535',
            'password' => Hash::make('admin'),
            'created_at' => $currentDate,
            'updated_at' => $currentDate,
        ]);
    }
}
