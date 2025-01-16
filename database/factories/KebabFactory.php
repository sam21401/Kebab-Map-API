<?php

namespace Database\Factories;

use App\Models\Kebab;
use Illuminate\Database\Eloquent\Factories\Factory;

class KebabFactory extends Factory
{
    protected $model = Kebab::class;

    public function definition()
    {
        return [
            'name' => $this->faker->word(),
            'logo' => $this->faker->imageUrl(),
            'address' => $this->faker->address(),
            'latitude' => $this->faker->latitude(),
            'longitude' => $this->faker->longitude(),
            'year_opened' => $this->faker->year(),
            'year_closed' => $this->faker->optional()->year(),
        ];
    }
}

