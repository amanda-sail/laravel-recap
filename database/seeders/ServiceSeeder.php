<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert([
            'service' => 'first-service',
            'title' => 'App Maintenance',
            'description' => 'You are not allowed to redistribute this template ZIP file on any other website.',
            'btn_text' => 'Read More',
            'btn_icon' => 'fa fa-arrow-right',
        ]);
        DB::table('services')->insert([
            'service' => 'second-service',
            'title' => 'Rocket Speed of App',
            'description' => 'You are allowed to use the Chain App Dev HTML template. Feel free to modify or edit this layout.',
            'btn' => 'Read More',
            'btn_icon' => 'fa fa-arrow-right',
        ]);
        DB::table('services')->insert([
            'service' => 'third-service',
            'title' => 'Multi Workflow Idea',
            'description' => 'If this template is beneficial for your work, please support us <a rel="nofollow"
            href="https://paypal.me/templatemo" target="_blank">a little via PayPal</a>. Thank you.',
            'btn' => 'Read More',
            'btn_icon' => 'fa fa-arrow-right',
        ]);
        DB::table('services')->insert([
            'service' => 'fourth-service',
            'title' => '24/7 Help & Support',
            'description' => 'Lorem ipsum dolor consectetur adipiscing elit sedder williamsburg photo booth quinoa and fashion axe.',
            'btn' => 'Read More',
            'btn_icon' => 'fa fa-arrow-right',
        ]);
    }
}
