<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KebabSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kebabs = [
            [
                'name' => 'Super Kebab',
                'logo' => 'super_kebab_logo.png',
                'address' => '123 Main Street, City A',
                'latitude' => 52.2297,
                'longitude' => 21.0122,
                'year_opened' => 2005,
                'year_closed' => null,
            ],
            [
                'name' => 'Mega Doner',
                'logo' => 'mega_doner_logo.png',
                'address' => '456 Another Road, City B',
                'latitude' => 50.0619,
                'longitude' => 19.9368,
                'year_opened' => 2010,
                'year_closed' => 2020,
            ],
        ];

        foreach ($kebabs as $kebab) {
            $kebabId = DB::table('kebab')->insertGetId($kebab);

            DB::table('kebab_details')->insert([
                'kebab_id' => $kebabId,
                'opening_hours' => json_encode([
                    'monday' => '09:00-22:00',
                    'tuesday' => '09:00-22:00',
                    'wednesday' => '09:00-22:00',
                    'thursday' => '09:00-22:00',
                    'friday' => '09:00-23:00',
                    'saturday' => '10:00-23:00',
                    'sunday' => '10:00-21:00',
                ]),
                'meat_types' => json_encode(['chicken', 'beef', 'lamb']),
                'sauces' => json_encode(['garlic', 'spicy', 'yogurt']),
                'status' => '3 OPZ',
                'is_craft' => rand(0, 1),
                'is_in_stall' => rand(0, 1),
                'is_chain_member' => rand(0, 1),
                'ordering_options' => json_encode(['on-site', 'takeaway', 'delivery']),
            ]);
        }
    }
}
