<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\announcement>
 */
class AnnouncementFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'header' => fake() -> name(),
            'sub_header' => fake() -> name(),
            'description' => fake() -> text(),
            'image' => fake() -> randomElement(['image.jpg', 'image.png', 'image.ivg' ]),
            'user_id' => fake() -> numberBetween($min = 1000, $max = 9000)
        ];
    }
}
