<?php

namespace Database\Seeders;

use App\Models\BlogComments;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BlogCommentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BlogComments::truncate();
        \App\Models\BlogComments::factory(10)->create();
    }
}
