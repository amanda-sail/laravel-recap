<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
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
        DB::table('users')->insert([
            'class' => 'active',
            'name' => 'David Martino',
            'comment' => '“Lorem ipsum dolor sit amet, consectetur adpiscing elit, sed do eismod tempor idunte ut labore et dolore magna aliqua darwin kengan lorem ipsum dolor sit amet, consectetur picing elit massive big blasta.”',
            'position' => 'CEO of David Company',
            'profile_pic' => 'images/client-image.jpg',
            'email' => 'David@email.com',
            'password' => Hash::make('David'),
        ]);
        DB::table('users')->insert([
            'class' => '',
            'name' => 'Jake H. Nyo',
            'comment' => '“CTO, Lorem ipsum dolor sit amet, consectetur adpiscing elit, sed do eismod tempor idunte ut labore et dolore magna aliqua darwin kengan lorem ipsum dolor sit amet, consectetur picing elit massive big blasta.”',
            'position' => 'CTO of Digital Company',
            'profile_pic' => 'images/client-image.jpg',
            'email' => 'Jake@email.com',
            'password' => Hash::make('Jake'),
        ]);
        DB::table('users')->insert([
            'class' => '',
            'name' => 'May C.',
            'comment' => '“May, Lorem ipsum dolor sit amet, consectetur adpiscing elit, sed do eismod tempor idunte ut labore et dolore magna aliqua darwin kengan lorem ipsum dolor sit amet, consectetur picing elit massive big blasta.”',
            'position' => 'Founder of Catherina Co.',
            'profile_pic' => 'images/client-image.jpg',
            'email' => 'May@email.com',
            'password' => Hash::make('May'),
        ]);
        
        DB::table('users')->insert([
            'class' => '',
            'name' => 'Random Staff',
            'comment' => '“Lorem ipsum dolor sit amet, consectetur adpiscing elit, sed do eismod tempor idunte ut labore et dolore magna aliqua darwin kengan lorem ipsum dolor sit amet, consectetur picing elit massive big blasta.”',
            'position' => 'Manager, Digital Company',
            'profile_pic' => 'images/client-image.jpg',
            'email' => 'Random@email.com',
            'password' => Hash::make('Random'),
        ]);

        DB::table('users')->insert([
            'class' => '',
            'name' => 'Mark Am',
            'comment' => '“Mark, Lorem ipsum dolor sit amet, consectetur adpiscing elit, sed do eismod tempor idunte ut labore et dolore magna aliqua darwin kengan lorem ipsum dolor sit amet, consectetur picing elit massive big blasta.”',
            'position' => 'CTO, Amber Do Company',
            'profile_pic' => 'images/client-image.jpg',
            'email' => 'Mark@email.com',
            'password' => Hash::make('Mark'),
        ]);

        DB::table('users')->insert([
            'class' => '',
            'name' => 'Mark Am',
            'comment' => '“Mark, Lorem ipsum dolor sit amet, consectetur adpiscing elit, sed do eismod tempor idunte ut labore et dolore magna aliqua darwin kengan lorem ipsum dolor sit amet, consectetur picing elit massive big blasta.”',
            'position' => 'CTO, Amber Do Company',
            'profile_pic' => 'images/client-image.jpg',
            'email' => 'admin@admin.com',
            'password' => Hash::make("admin"),
        ]);
    }
}
