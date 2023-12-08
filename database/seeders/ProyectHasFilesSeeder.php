<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ProyectHasFiles;

class ProyectHasFilesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProyectHasFiles::factory(20)->create();
    }
}
