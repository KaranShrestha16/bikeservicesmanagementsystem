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
        $this-> post(route('mechanics.store'), [
            'name'=>'Harikumar',
            'contact'=>'1234567890',
            'address'=>'Nepal'
        ]);

        $response->assertOk();
        $this->assertCount(1,Mechanic::all());
           
            /////   ./vendor/bin/phpunit --filter store_mechanics    ///////////
    }
    
    /** @test */ 
    public function mechanics_can_be_updated()
    {
        $this-> withoutExceptionHandling();
        $this-> post(route('mechanics.store'), [
            'name'=>'Harikumar',
            'address'=>'Nepal',
            'contact'=>1234567890,
            'type'=>"hero"

        ]);
        $mechanic=Mechanic::first();
        $response= $this->patch(route('mechanics.update', $mechanic->id),[
            'name'=>'Karanstha',
            'address'=>'Nepal,Kathmandu',
            'contact'=>1234567891,
            'type' => 'hero'
        ]);
        $this->assertEquals('Karanstha',Mechanic::first()->name);
        $this-> assertEquals('Nepal,Kathmandu',Mechanic::first()->address);
        $this->assertEquals(1234567891,Mechanic::first()->contact);

        /////   ./vendor/bin/phpunit --filter mechanics_can_be_updated    ///////////
    } 

    /** @test */
    public function mechanic_can_be_deleted(){

        $this-> withoutExceptionHandling();

        $this-> post(route('mechanics.store'), [
            'name'=>'Harikumar',
            'contact'=>'1234567890',
            'address'=>'Nepal'
        ]);

        $mechanic= Mechanic::first();
        $this->assertCount(1,Mechanic::all());

        $response=$this->delete(route('mechanics.update', $mechanic->id));

        $this->assertCount(0,Mechanic::all());

        /////   ./vendor/bin/phpunit --filter mechanic_can_be_deleted    ///////////
    }

}
