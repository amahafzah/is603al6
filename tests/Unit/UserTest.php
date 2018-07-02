<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;

class UserTest extends TestCase
{

    public function testExample()
    {
        /** @var TYPE_NAME $user */
        $user = User::inRandomOrder ()->first ();
        $this->assertInternalType ( 'int', $user->id );
        $this->assertInstanceOf ( 'App\User', $user );
    }
}
