<?php

namespace Tests\Feature\Models;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserTest extends TestCase
{
    //use RefreshDatabase;
    
    public function test_example()
    {
        //process

        $this->assertDatabaseHas('users', [
            'email' => 'martha@me.com'
        ]);

        $this->assertDatabaseMissing('users', [
            'email' => 'doesntexist@me.com'
        ]);
    }
}
