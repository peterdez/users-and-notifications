<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $response = $this->post('/api/users', ['firstName'=> 'Dayyo', 'lastName'=> 'Dayokppj', 'email'=> 'Dayojj@gmail.com']);

        $response->assertStatus(201);
    }
}
