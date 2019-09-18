<?php

namespace Tests\Feature;

use App\Mechanic;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class MechanicTest extends TestCase
{
    use RefreshDatabase;
    /** @test */
    public function store_mechanics(){
        $this->withoutExceptionHandling();
        $response = $this->post(route('mechanics.store'), [
            'name' => 'KARAN',
            'address' => 'kathmandu',
            'contact' => '98123456789'
            ]);
            $response->assertOk();
            $this->assertCount(1, Mechanic::all());
            /////   ./vendor/bin/phpunit --filter store_mechanics    ///////////
    }
    
}
