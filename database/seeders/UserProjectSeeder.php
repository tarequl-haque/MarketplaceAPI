<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\UserProject;

class UserProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        UserProject::factory(20)->create();
    }
}
