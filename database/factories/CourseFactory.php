<?php

namespace Database\Factories;

use App\Models\Course;
use App\Models\Major;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Course>
 */
class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'major_id' => Major::inRandomOrder()->first()->id,
            'code' => $this->faker->unique()->regexify('[A-Z0-9\-]{6}'),
            'name' => $this->faker->sentence(3),
            'prerequisite' => Course::inRandomOrder()->first()->code,
            'type' => $this->faker->randomElement(['mandated', 'elective']),
            'credits_hours' => $this->faker->numberBetween(1, 6),
        ];
    }
}
