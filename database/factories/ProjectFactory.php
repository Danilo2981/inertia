<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "name" => $this->faker->name,
            "user_id" => User::all()->random()->id,
            "excerpt" => $this->faker->text(40),
            "content" => $this->faker->text(1000),
        ];
    }
}
