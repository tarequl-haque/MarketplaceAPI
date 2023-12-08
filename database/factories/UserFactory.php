<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => $this->faker->name(),
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'verified' => $this->faker->boolean(),
            'admin' => $this->faker->boolean(),
            'project_published' => $this->faker->paragraph(),
            'type_of_institution' => $this->faker->randomElement(['Empresa Pública', 'ONG o empreses del 3er sector', 'Empresa Privada', 'Altres']),
            'remember_token' => Str::random(10),
        ];
    }
}
