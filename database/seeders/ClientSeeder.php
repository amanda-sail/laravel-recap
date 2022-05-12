<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clients')->insert([
            'class' => 'first-thumb active',
            'profile_pic' => 'images/client-image.jpg',
            'name' => 'David Martino Co',
            'position' => 'CEO of David Company',
            'date' => '30 November 2021',
            'category' => 'Financial Apps',
            'rating' => '4.8',
            'comment' => '“Lorem ipsum dolor sit amet, consectetur adpiscing elit, sed do eismod tempor idunte ut labore et dolore magna aliqua darwin kengan lorem ipsum dolor sit amet, consectetur picing elit massive big blasta.”',
        ]);
        DB::table('clients')->insert([
            'class' => '',
            'profile_pic' => 'images/client-image.jpg',
            'name' => 'Jake Harris Nyo',
            'position' => 'CTO of Digital Company',
            'date' => '29 November 2021',
            'category' => 'Digital Business',
            'rating' => '4.5',
            'comment' => '“CTO, Lorem ipsum dolor sit amet, consectetur adpiscing elit, sed do eismod tempor idunte ut labore et dolore magna aliqua darwin kengan lorem ipsum dolor sit amet, consectetur picing elit massive big blasta.”',
        ]);
        DB::table('clients')->insert([
            'class' => '',
            'profile_pic' => 'images/client-image.jpg',
            'name' => 'May Catherina',
            'position' => 'Founder of Catherina Co.',
            'date' => '27 November 2021',
            'category' => 'Business & Economics',
            'rating' => '4.7',
            'comment' => '“May, Lorem ipsum dolor sit amet, consectetur adpiscing elit, sed do eismod tempor idunte ut labore et dolore magna aliqua darwin kengan lorem ipsum dolor sit amet, consectetur picing elit massive big blasta.”',
        ]);
        DB::table('clients')->insert([
            'class' => '',
            'profile_pic' => 'images/client-image.jpg',
            'name' => 'Random User',
            'position' => 'Manager, Digital Company',
            'date' => '24 November 2021',
            'category' => 'New App Ecosystem',
            'rating' => '3.9',
            'comment' => '“Lorem ipsum dolor sit amet, consectetur adpiscing elit, sed do eismod tempor idunte ut labore et dolore magna aliqua darwin kengan lorem ipsum dolor sit amet, consectetur picing elit massive big blasta.”',
        ]);
        DB::table('clients')->insert([
            'class' => 'last-thumb',
            'profile_pic' => 'images/client-image.jpg',
            'name' => 'Mark Amber Do',
            'position' => 'CTO, Amber Do Company',
            'date' => '21 November 2021',
            'category' => 'Web Development',
            'rating' => '4.3',
            'comment' => '“Mark, Lorem ipsum dolor sit amet, consectetur adpiscing elit, sed do eismod tempor idunte ut labore et dolore magna aliqua darwin kengan lorem ipsum dolor sit amet, consectetur picing elit massive big blasta.”',
        ]);
    }
}
