<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('banners')->insert([
            'header' => 'Get The Latest App From App Stores',
            'description' => 'Chain App Dev is an app landing page HTML5 template based on Bootstrap v5.1.3 CSS layout provided by TemplateMo, a great website to download free CSS templates.',
            'apple_btn' => 'Free Quote',
            'playstore_btn' => 'Free Quote',
            'apple_icon' => 'fab fa-apple',
            'playstore_icon' => 'fab fa-google-play',
            'img' => 'images/slider-dec.png',
        ]);
    }
}
