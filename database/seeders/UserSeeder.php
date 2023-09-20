<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => "admin",
            'email'=> "admin@admin.com",
            'password'=>12345678
        ])->assignRole("admin");

        User::create([
            'name' => "webmaster",
            'email'=> "web@master.com",
            'password'=>12345678
        ])->assignRole("webMaster");
        
        User::create([
            'name' => "user",
            'email'=> "user@user.com",
            'password'=>12345678
        ])->assignRole("user");
    }
}
