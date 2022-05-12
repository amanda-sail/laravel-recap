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
            'icon' => 'service-icon-01.png',
            'title' => 'App Maintenance',
            'description' => 'You are not allowed to redistribute this template ZIP file on any other website.',
            'btn_text' => 'Read More',
            'btn_icon' => 'fa fa-arrow-right',
        ]);
        DB::table('services')->insert([
            'service' => 'second-service',
            'icon' => 'service-icon-02.png',
            'title' => 'Rocket Speed of App',
            'description' => 'You are allowed to use the Chain App Dev HTML template. Feel free to modify or edit this layout.',
            'btn_text' => 'Read More',
            'btn_icon' => 'fa fa-arrow-right',
        ]);
        DB::table('services')->insert([
            'service' => 'third-service',
            'icon' => 'service-icon-03.png',
            'title' => 'Multi Workflow Idea',
            'description' => 'If this template is beneficial for your work, please support us (a little via PayPal). Thank you.',
            'btn_text' => 'Read More',
            'btn_icon' => 'fa fa-arrow-right',
        ]);
        DB::table('services')->insert([
            'service' => 'fourth-service',
            'icon' => 'service-icon-04.png',
            'title' => '24/7 Help & Support',
            'description' => 'Lorem ipsum dolor consectetur adipiscing elit sedder williamsburg photo booth quinoa and fashion axe.',
            'btn_text' => 'Read More',
            'btn_icon' => 'fa fa-arrow-right',
        ]);
    }
}
