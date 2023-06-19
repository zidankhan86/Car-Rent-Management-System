<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([

            "name"=>"Admin",
            "email"=>"admin@gmail.com",
            "password"=>bcrypt('12345'),
            "role"=>'admin'


        ]);
    }
}
