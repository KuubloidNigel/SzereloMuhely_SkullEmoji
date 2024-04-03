<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RouteTest extends TestCase
{
    public function test_home()
    {
        $response = $this->get('/home');

        return $response->assertStatus(200);
    }
    public function test_login()
    {
        $response = $this->get('/login');

        return $response->assertStatus(200);
    }
    public function test_registration()
    {
        $response = $this->get('/registration');

        return $response->assertStatus(200);
    }
}
