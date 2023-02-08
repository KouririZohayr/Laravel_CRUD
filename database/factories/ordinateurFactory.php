<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ordinateur>
 */
class ordinateurFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'libele' => $this->faker->company(),
            'marque' => $this->faker->sentence(),
            'image' => $this->faker->imageUrl(640,480),
            'description' => $this->faker->text(),
            'prix' => $this->faker->numberBetween($min = 1500, $max = 6000),
            'dateacha' => $this->faker->date($format = 'Y-m-d', $max = 'now'),

        ];
    }
}
