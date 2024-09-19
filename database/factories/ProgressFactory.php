<?php

namespace Database\Factories;

use App\Models\Flashcard;
use App\Models\Progress;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProgressFactory extends Factory
{
    protected $model = Progress::class;

    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'flashcard_id' => Flashcard::factory(),
            'correct_attempts' => $this->faker->randomNumber(),
            'incorrect_attempts' => $this->faker->randomNumber(),
            'last_viewed_at' => null,
            'next_review_at' => null,
        ];
    }
}
