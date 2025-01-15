<?php

namespace Tests\Feature;

use App\Models\User;
use App\Models\Kebab;
use App\Models\KebabDetail;
use App\Models\Favorite;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class KebabControllerTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();
        $this->user = User::factory()->create(['role' => 1]);
    }

    /** @test */
    public function it_can_show_all_kebabs()
    {
        Kebab::factory()->count(3)->create();

        $response = $this->get('api/kebab/showAll');

        $response->assertStatus(200)
            ->assertJsonStructure([
                'status',
                'message',
                'data' => [
                    '*' => ['id', 'name', 'logo', 'address', 'latitude', 'longitude', 'year_opened', 'year_closed']
                ]
            ]);
    }

    /** @test */
    public function it_can_show_a_kebab_by_id()
    {
        $kebab = Kebab::factory()->create();

        $response = $this->get('api/kebab/show/' . $kebab->id);

        $response->assertStatus(200)
            ->assertJson([
                'status' => true,
                'message' => 'Kebab details',
                'data' => [
                    'id' => $kebab->id,
                    'name' => $kebab->name,
                ]
            ]);
    }

    /** @test */
    public function it_returns_not_found_when_kebab_not_exist()
    {
        $response = $this->get('api/kebab/show/999');

        $response->assertStatus(404)
            ->assertJson([
                'status' => false,
                'message' => 'Kebab not found'
            ]);
    }

    /** @test */
    public function it_can_add_a_new_kebab()
    {
        $this->actingAs($this->user);

        $data = [
            'name' => 'New Kebab',
            'logo' => 'logo_url',
            'address' => '123 Kebab St',
            'latitude' => 12.345678,
            'longitude' => 98.765432,
            'year_opened' => 2020,
            'year_closed' => null,
            'opening_hours' => json_encode(['monday' => '10:00-22:00']),
            'meat_types' => json_encode(['chicken']),
            'sauces' => json_encode(['garlic']),
            'ordering_options' => json_encode(['online']),
            'status' => 'open',
            'is_craft' => true,
            'is_in_stall' => false,
            'is_chain_member' => true,
        ];

        $response = $this->post('api/kebab/add', $data);

        $response->assertStatus(201)
            ->assertJson([
                'status' => true,
                'message' => 'Kebab created successfully',
            ]);
    }

    /** @test */
    public function it_can_update_a_kebab()
    {
        {
            // Create a user with admin role
            $user = User::factory()->create(['role' => 1]);
            $this->actingAs($user); // Authenticate as the admin user

            // Create a kebab to update
            $kebab = Kebab::factory()->create();
            KebabDetail::factory()->create(['kebab_id' => $kebab->id]); // Create details for the kebab

            // Data to update the kebab
            $data = [
                'name' => 'Updated Kebab',
                'logo' => 'new-logo-url.jpg',
                'address' => 'New Address',
                'latitude' => 40.7128,
                'longitude' => -74.0060,
                'year_opened' => 2020,
                'year_closed' => 2022, // Ensure this is an integer
                'opening_hours' => json_encode(['monday' => '10:00-22:00']),
                'meat_types' => json_encode(['chicken', 'beef']),
                'sauces' => json_encode(['garlic', 'spicy']),
                'status' => 'open',
                'is_craft' => true,
                'is_in_stall' => false,
                'is_chain_member' => true,
                'ordering_options' => json_encode(['online']),
            ];

            $response = $this->put('api/kebab/update/' . $kebab->id, $data);

            $response->assertStatus(200)
                ->assertJson([
                    'status' => true,
                    'message' => 'Kebab updated successfully',
                ]);

            $this->assertDatabaseHas('kebab', [
                'name' => 'Updated Kebab',
                'address' => 'New Address',
                'year_closed' => 2022,
            ]);
        }
    }

    /** @test */
    public function it_can_delete_a_kebab()
    {
        $user = User::factory()->create(['role' => 1]);
        $this->actingAs($user);

        $kebab = Kebab::factory()->create();
        KebabDetail::factory()->create(['kebab_id' => $kebab->id]);

        $response = $this->delete('api/kebab/delete/' . $kebab->id);

        $response->assertStatus(200)
            ->assertJson([
                'status' => true,
                'message' => 'Kebab deleted successfully',
            ]);

        $this->assertDatabaseMissing('kebab', [
            'id' => $kebab->id,
        ]);
    }

    /** @test */
    public function it_can_filter_kebabs()
    {
        $user = User::factory()->create();
        $this->actingAs($user);

        $kebabOne = Kebab::factory()->create();
        KebabDetail::factory()->create([
            'kebab_id' => $kebabOne->id,
            'opening_hours' => json_encode([
                'monday' => '10:00-22:00',
                'tuesday' => '10:00-22:00',
                'wednesday' => '10:00-22:00',
                'thursday' => '10:00-22:00',
                'friday' => '10:00-23:00',
                'saturday' => '10:00-23:00',
                'sunday' => 'Closed',
            ]),
        ]);

        $response = $this->get('api/kebab/filter');

        $response->assertStatus(200)
            ->assertJsonStructure([
                'status',
                'message',
                'data' => [
                    '*' => [
                        'id',
                        'name',
                        'opening_hours',
                    ],
                ],
            ]);
    }

    /** @test */
    public function it_can_add_kebab_to_favorites()
    {
        $user = User::factory()->create();
        $kebab = Kebab::factory()->create();

        $response = $this->actingAs($user)->postJson("/api/kebab/{$kebab->id}/fav");

        $response->assertStatus(201)
            ->assertJson([
                'status' => true,
                'message' => 'Kebab added to favorites successfully',
            ]);

        $this->assertDatabaseHas('favorites', [
            'user_id' => $user->id,
            'kebab_id' => $kebab->id,
        ]);
    }

    /** @test */
    public function it_can_remove_kebab_from_favorites()
    {
        $user = User::factory()->create();
        $kebab = Kebab::factory()->create();
        $favorite = Favorite::create(['user_id' => $user->id, 'kebab_id' => $kebab->id]);

        $response = $this->actingAs($user)->deleteJson("/api/kebab/{$kebab->id}/favdelete");

        $response->assertStatus(200)
            ->assertJson([
                'status' => true,
                'message' => 'Kebab removed from favorites successfully',
            ]);

        $this->assertDatabaseMissing('favorites', [
            'id' => $kebab->id,
        ]);
    }
}

