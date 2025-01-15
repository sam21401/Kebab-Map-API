<?php

namespace Database\Factories;

use App\Models\KebabDetail;
use Illuminate\Database\Eloquent\Factories\Factory;

class KebabDetailFactory extends Factory
{
    protected $model = KebabDetail::class;

    public function definition()
    {
        return [
            'kebab_id' => \App\Models\Kebab::factory(), // Assuming you have a Kebab model
            'opening_hours' => json_encode([
                'monday' => '10:00-22:00',
                'tuesday' => '10:00-22:00',
                'wednesday' => '10:00-22:00',
                'thursday' => '10:00-22:00',
                'friday' => '10:00-23:00',
                'saturday' => '10:00-23:00',
                'sunday' => 'Closed',
            ]),
            'meat_types' => json_encode(['chicken', 'beef', 'lamb']),
            'sauces' => json_encode(['garlic', 'spicy', 'yogurt']),
            'status' => $this->faker->word(),
            'is_craft' => $this->faker->boolean(),
            'is_in_stall' => $this->faker->boolean(),
            'is_chain_member' => $this->faker->boolean(),
            'ordering_options' => json_encode(['online', 'in-store']),
        ];
    }
}

