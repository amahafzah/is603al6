<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;

class DataAvailable extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {

        // Make call to application...

        $this->assertDatabaseHas ( 'users', ['email' => 'hoeger.sammy@example.com'] );
    }
}

