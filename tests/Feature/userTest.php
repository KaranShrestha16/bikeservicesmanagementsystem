<?php

namespace Tests\Feature;

use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Testing\RefreshDatabase;

class userTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function changePassword()
    {

        $this->withoutExceptionHandling();

        //creating a user
        $this->actingAs(factory(User::class)->create());

        $response = $this->put('/users/changepassword', [
            'password' => 'asd12345',
        ]);

        $this->assertEquals('asd12345', User::first()->password);

        /////   ./vendor/bin/phpunit --filter changePassword    ///////////
    }

        /** @test */
    public function updateUser(){

        $this->withoutExceptionHandling();

        //creating a user
        $this->actingAs(factory(User::class)->create());

        //passing updating values
        $response = $this->put('users/update_profile', [
            'name' => 'name123',
            'phoneno' => 9842345562,
            'address' => 'newwwww'
        ]);

        $this->assertEquals('name123', User::first()->name);
        $this->assertEquals(9842345562, User::first()->phoneno);
        $this->assertEquals('newwwww', User::first()->address);

    }
}
