<?php

namespace Modules\Auth\Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\User\Entities\User;
use Tests\TestCase;

class LogoutTest extends TestCase
{
    use RefreshDatabase;

    public function test_auth_user_can_be_logout()
    {
        $this->actingAs(User::factory()->create());

        $this->assertAuthenticated();

        $this->post(route('auth.logout'))->assertOk();

        $this->assertGuest();
    }
}
