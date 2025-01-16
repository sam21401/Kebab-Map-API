<?php

namespace Database\Factories;

use App\Models\Suggestion;
use Illuminate\Database\Eloquent\Factories\Factory;

class SuggestionFactory extends Factory
{
    protected $model = Suggestion::class;

    public function definition()
    {
        return [
            'user_id' => \App\Models\User::factory(),
            'subject' => $this->faker->sentence(10),
            'is_reviewed' => false,
        ];
    }
}
