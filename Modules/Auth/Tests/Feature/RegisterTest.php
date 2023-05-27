<?php

namespace Modules\Auth\Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Modules\User\Entities\User;
use Tests\TestCase;

class RegisterTest extends TestCase
{
    use RefreshDatabase, WithFaker;

    protected static string $tableName = 'users';

    public function test_register_page_can_be_rendered(): void
    {
        $this->get(route('auth.showRegisterForm'))
            ->assertOk();
    }

    public function test_new_user_can_be_registered(): void
    {
        $this->post(route('auth.register'), [
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => '12345678',
            'password_confirmation' => '12345678',
        ])->assertOk();

        $this->assertAuthenticated();
    }
}
