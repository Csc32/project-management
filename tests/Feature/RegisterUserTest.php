<?php

namespace Tests\Feature;

use Tests\TestCase;

class RegisterUserTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_admin_can_log_in(): void
    {
        $response = $this->post('/log-in', [
            'user_id' => '123456',
            'password' => '123456',
        ]);
        $response->assertRedirect('/home');
    }
}
