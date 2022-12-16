<?php

namespace Tests\Feature\Models;

use Tests\TestCase;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserTest extends TestCase
{
    use RefreshDatabase;
    
    public function test_user_table_has_email()
    {
        //process
        User::factory()->create([
            'email' => 'martha@me.com'
        ]);

        $this->assertDatabaseHas('users', [
            'email' => 'martha@me.com'
        ]);

        $this->assertDatabaseMissing('users', [
            'email' => 'doesntexist@me.com'
        ]);
    }
}
