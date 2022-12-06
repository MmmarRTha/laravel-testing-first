<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PageTest extends TestCase
{
    public function test_home_status_200()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_about_status_200()
    {
        $response = $this->get('about');

        $response->assertStatus(200);
    }
}
