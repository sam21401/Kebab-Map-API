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
            'latitude' => $this->faker->latitude(-90, 90),  // Latitude between -90 and 90
            'longitude' => $this->faker->longitude(-180, 180), // Longitude between -180 and 180
            'year_opened' => $this->faker->year(),
            'year_closed' => $this->faker->optional()->year(), // Year closed is optional
        ];
    }
}

