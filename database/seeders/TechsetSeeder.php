<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Techset; 

class TechsetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Techset::factory(20)->create();
    }
}
