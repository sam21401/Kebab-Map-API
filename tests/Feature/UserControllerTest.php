<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;

class UserControllerTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_can_register_a_user()
    {
        $response = $this->postJson('api/register', [
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => 'password123',
        ]);

        $response->assertStatus(201);
        $this->assertDatabaseHas('users', [
            'email' => 'test@example.com',
        ]);
    }

    /** @test */
    public function it_cannot_register_user_with_existing_email()
    {
        User::create([
            'name' => 'Existing User',
            'email' => 'existing@example.com',
            'password' => Hash::make('password123'),
        ]);

        $response = $this->postJson('api/register', [
            'name' => 'Another User',
            'email' => 'existing@example.com',
            'password' => 'password123',
        ]);

        $response->assertStatus(401);
        $response->assertJsonValidationErrors('email');
    }

    /** @test */
    public function it_can_login_a_user()
    {
        $user = User::create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => Hash::make('password123'),
        ]);

        $response = $this->postJson('api/login', [
            'email' => 'test@example.com',
            'password' => 'password123',
        ]);

        $response->assertStatus(200);
        $this->assertArrayHasKey('token', $response->json());
    }

    /** @test */
    public function it_cannot_login_with_invalid_credentials()
    {
        $user = User::create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => Hash::make('password123'),
        ]);

        $response = $this->postJson('api/login', [
            'email' => 'test@example.com',
            'password' => 'wrongpassword',
        ]);

        $response->assertStatus(401);
    }
    /** @test */
    public function it_can_get_user_profile()
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user, 'sanctum')->getJson('api/profile');

        $response->assertStatus(200);
        $response->assertJson([
            'status' => true,
            'message' => 'Profile Info',
            'data' => [
                'name' => $user->name,
                'email' => $user->email,
            ],
        ]);
    }

    /** @test */
    /** @test */
    public function it_can_change_password()
    {
        $user = User::factory()->create([
            'password' => Hash::make('oldpassword'),
        ]);

        $this->actingAs($user, 'sanctum');

        // Change password request
        $response = $this->postJson('/api/change-password', [
            'current_password' => 'oldpassword',
            'new_password' => 'newpassword',
            'new_password_confirmation' => 'newpassword',
        ]);

        $response->assertStatus(200);

        $this->assertTrue(Hash::check('newpassword', $user->fresh()->password));
    }


    /** @test */
    public function it_cannot_change_password_with_invalid_old_password()
    {
        $user = User::factory()->create([
            'password' => Hash::make('oldpassword'),
        ]);

        $response = $this->actingAs($user, 'sanctum')->postJson('api/change-password', [
            'old_password' => 'wrongpassword',
            'new_password' => 'newpassword',
        ]);

        $response->assertStatus(401);
    }

    /** @test */
    public function it_can_logout_a_user()
    {
        $user = User::factory()->create();
        $this->actingAs($user, 'sanctum');

        $response = $this->getJson('api/logout');

        $response->assertStatus(200);

        $response->assertJson([
            'status' => true,
            'message' => 'Successfully Logout',
            'data' => [],
        ]);

        $this->assertCount(0, $user->tokens);
    }

    /** @test */
    public function it_can_get_user_by_id()
    {
        $adminUser = User::factory()->create(['role' => 1]);

        $user = User::factory()->create();

        $response = $this->actingAs($adminUser, 'sanctum')->getJson('api/user/' . $user->id);

        $response->assertStatus(200);
        $response->assertJson([
            'status' => true,
            'message' => 'User details retrieved successfully',
            'data' => [
                'id' => $user->id,
                'name' => $user->name,
                'email' => $user->email,
            ],
        ]);
    }

    /** @test */
    public function it_cannot_get_user_profile_of_another_user()
    {
        $user1 = User::factory()->create();
        $user2 = User::factory()->create();

        $response = $this->actingAs($user1, 'sanctum')->getJson('api/user/' . $user2->id);

        $response->assertStatus(403);
    }
}
