<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Team>
 */
class TeamFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

            return [
            'name' => $this->faker->company,
            'coach' => $this->faker->name,
            'stadium' => $this->faker->city . ' Stadium',
            'players' => $this->faker->numberBetween(15, 30),
            'established_year' => $this->faker->numberBetween(1900, 2022),
            'user_id' => function () {
                return \App\Models\User::factory()->create()->id;
            },
        ];

    }
}
