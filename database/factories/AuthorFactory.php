<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Author>
 */
class AuthorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'contact' => $this->faker->phoneNumber(),
            'address' => $this->faker->address(),
            'birthday' => $this->faker
                ->dateTimeInInterval('-60 years', '+35 years'),
        ];
    }
}
