<?php

namespace Tests\Feature;

use App\Models\Suggestion;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class SuggestionControllerTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();
        // Create an admin user
        $this->admin = User::factory()->create(['role' => 1]);
        // Create a regular user
        $this->user = User::factory()->create(['role' => 0]);
    }

    /** @test */
    public function it_can_add_a_suggestion()
    {
        $this->actingAs($this->user);

        $response = $this->postJson('/api/suggest/add', [
            'subject' => 'This is a test suggestion',
        ]);

        $response->assertStatus(201)
            ->assertJson([
                'status' => true,
                'message' => 'Suggestion submitted successfully',
            ]);

        $this->assertDatabaseHas('suggestions', [
            'subject' => 'This is a test suggestion',
            'user_id' => $this->user->id,
        ]);
    }

    /** @test */
    public function it_can_get_all_suggestions_as_admin()
    {
        $this->actingAs($this->admin);

        Suggestion::factory()->create(['user_id' => $this->user->id, 'subject' => 'Suggestion 1']);
        Suggestion::factory()->create(['user_id' => $this->user->id, 'subject' => 'Suggestion 2']);

        $response = $this->getJson('/api/suggest');

        $response->assertStatus(200)
            ->assertJson([
                'status' => true,
                'message' => 'Suggestions retrieved successfully',
            ])
            ->assertJsonCount(2, 'data');
    }

    /** @test */
    public function it_denies_non_admin_users_access_to_suggestions()
    {
        $this->actingAs($this->user);

        $response = $this->getJson('/api/suggest');

        $response->assertStatus(403)
            ->assertJson([
                'status' => false,
                'message' => 'Access denied. Admins only.',
            ]);
    }

    /** @test */
    public function it_can_delete_a_suggestion()
    {
        $this->actingAs($this->admin);

        $suggestion = Suggestion::factory()->create(['user_id' => $this->user->id]);

        $response = $this->deleteJson("/api/suggest/{$suggestion->id}");

        $response->assertStatus(200)
            ->assertJson([
                'status' => true,
                'message' => 'Suggestion deleted successfully',
            ]);

        $this->assertDatabaseMissing('suggestions', [
            'id' => $suggestion->id,
        ]);
    }

    /** @test */
    public function it_denies_non_admin_users_access_to_delete_suggestions()
    {
        $this->actingAs($this->user);

        $suggestion = Suggestion::factory()->create(['user_id' => $this->user->id]);

        $response = $this->deleteJson("/api/suggest/{$suggestion->id}");

        $response->assertStatus(403)
            ->assertJson([
                'status' => false,
                'message' => 'Access denied. Admins only.',
            ]);
    }
}
