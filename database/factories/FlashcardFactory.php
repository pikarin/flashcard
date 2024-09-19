<?php

namespace Database\Factories;

use App\Models\Flashcard;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class FlashcardFactory extends Factory
{
    protected $model = Flashcard::class;

    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'question' => $this->faker->sentence(),
            'answer' => $this->faker->sentence(),
        ];
    }
}
