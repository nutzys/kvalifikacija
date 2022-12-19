<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $users = User::pluck('id')->toArray();
        return [
            'user_id' => $this->faker->randomElement($users),
            'title' => $this->faker->jobTitle(),
            'description' => $this->faker->sentence(25),
            'type' => 'Haltūra',
            'location' => $this->faker->city(),
            'price' => $this->faker->randomDigitNotNull()
        ];
    }
}
