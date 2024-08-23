<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'teacher_id' => \App\Models\Teacher::inRandomOrder()->first(),
            'class' => rand(1, 12),
            'admission_date' => Carbon::today()->subDays(rand(0, 365)),
            'yearly_fees' => rand(15000, 50000),
        ];
    }
}
