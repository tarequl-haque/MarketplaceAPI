<?php

namespace Database\Factories;

use App\Models\Project;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Techset;
use App\Models\File;

class ProjectFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Project::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
        'project_id' => $this->faker->name(),
        'owner_id' => $this->faker->name(),
        'title' => $this->faker->name(),
        'published_date' => $this->faker->date() ,
        'techset_id'  =>  Techset::inRandomOrder()->value('id'),
        'files_array_id'  =>  File::inRandomOrder()->value('id'),
        'deadline'  => $this->faker->randomDigit(),
        'short_explanation'  => $this->faker->paragraph(),
        'state'  => $this->faker->randomElement(['accepted' , 'published' , 'refused' , 'doing' , 'finished']),
        'bid'  => $this->faker->randomDigit(),
        ];
    }
}
