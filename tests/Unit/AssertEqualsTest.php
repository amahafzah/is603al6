<?php

use App\User;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserTest extends TestCase
{
    /** @test */
    function assertcounttest()
    {

        $users = User::all();

        $this->assertEquals(53, $users->count());
    }
}