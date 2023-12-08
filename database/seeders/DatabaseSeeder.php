<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

     
      $this->call(FileSeeder::class);
      $this->call(TechsetSeeder::class);
      $this->call(UserSeeder::class);
      $this->call(ProjectSeeder::class);
      $this->call(UserProjectSeeder::class);
      $this->call(ProyectHasFilesSeeder::class);

    }
}
