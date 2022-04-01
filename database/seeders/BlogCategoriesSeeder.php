<?php

namespace Database\Seeders;

use App\Models\BlogCategories;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BlogCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BlogCategories::truncate();
        \App\Models\BlogCategories::factory(15)->create();
    }
}
