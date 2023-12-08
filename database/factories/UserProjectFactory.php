<?php

namespace Database\Factories;

use App\Models\UserProject;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Project;

class UserProjectFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = UserProject::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id'  =>  User::inRandomOrder()->value('user_id'),
            'project_id'  =>  Project::inRandomOrder()->value('project_id'),
        ];
    }
}
