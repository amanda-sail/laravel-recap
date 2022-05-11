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
            'user_id' => 1,
            'class' => 'first-thumb active',
            'name' => 'David Martino Co',
            'date' => '30 November 2021',
            'category' => 'Financial Apps',
            'rating' => '4.8',
        ]);
        DB::table('clients')->insert([
            'user_id' => 2,
            'class' => '',
            'name' => 'Jake Harris Nyo',
            'date' => '29 November 2021',
            'category' => 'Digital Business',
            'rating' => '4.5',
        ]);
        DB::table('clients')->insert([
            'user_id' => 3,
            'class' => '',
            'name' => 'May Catherina',
            'date' => '27 November 2021',
            'category' => 'Business & Economics',
            'rating' => '4.7',
        ]);
        DB::table('clients')->insert([
            'user_id' => 4,
            'class' => '',
            'name' => 'Random User',
            'date' => '24 November 2021',
            'category' => 'New App Ecosystem',
            'rating' => '3.9',
        ]);
        DB::table('clients')->insert([
            'user_id' => 5,
            'class' => 'last-thumb',
            'name' => 'Mark Amber Do',
            'date' => '21 November 2021',
            'category' => 'Web Development',
            'rating' => '4.3',
        ]);
    }
}
