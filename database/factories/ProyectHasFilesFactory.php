<?php

namespace Database\Factories;

use App\Models\ProyectHasFiles;
use App\Models\File;
use App\Models\Project;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProyectHasFilesFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ProyectHasFiles::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [         

            'file_id' => File::inRandomOrder()->value('id'),
            'project_id' => Project::inRandomOrder()->value('project_id'),
            
        ];
    }
}
