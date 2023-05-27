<?php

namespace Modules\Auth\Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Str;
use Modules\User\Entities\User;
use Tests\TestCase;

class LoginTest extends TestCase
{
    use RefreshDatabase, WithFaker;

    protected static string $tableName = 'users';

    public function test_login_page_can_be_rendered(): void
    {
        $this->get(route('auth.showLoginForm'))
            ->assertOk();
    }

    public function test_user_can_be_login(): void
    {
        $user = User::factory()->state(['password' => $password = Str::password(8)])->create();
        $this->post(route('auth.login'), [
            'email' => $user->email,
            'password' => $password,
        ])->assertOk();

        $this->assertAuthenticated();
    }
}
