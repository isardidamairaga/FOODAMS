<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
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

        \App\Models\User::create([
            'name'=>'Isardi Dama Iraga',
            'email'=>'isardidamairaga27@gmail.com',
            'password'=>Hash::make("Isardi27"),
            'profile_photo_path'=>'',
            'address'=>'',
            'houseNumber'=>'',
            'phoneNumber'=>'',
            'city'=>'',
            'roles'=>'ADMIN'
        ]);
    }
}
