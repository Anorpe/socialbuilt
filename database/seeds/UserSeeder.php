<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::create([
            'email'=>1,
            'telefono'=>2445678,
            'celular'=>3138874567,
            'admin'=>true,
            'password'=>Hash::make('admin'),


        ]);

        User::create([
            'email'=>10101,
            'telefono'=>2445678,
            'celular'=>3138874567,
            'admin'=>false,
            'password'=>Hash::make('1234'),


        ]);

        User::create([
            'email'=>10102,
            'telefono'=>2445678,
            'celular'=>3138874566,
            'admin'=>false,
            'password'=>Hash::make('1234'),


        ]);

        User::create([
            'email'=>10103,
            'telefono'=>2412378,
            'celular'=>3123454566,
            'admin'=>false,
            'password'=>Hash::make(1234),


        ]);
    }
}
