<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class InquiryTest extends TestCase
{
    use RefreshDatabase;
    /** @test */
    public function store_inquiry(){
        $this->withoutExceptionHandling();
        $this-> post(route('inquiry.store'), [
            'title'=>'Harikumar',
            'body'=>'I have some problem with your sevices.'
        ]);

        $this->assertOk();
        $this->assertCount(1,Mechanic::all());
           
            /////   ./vendor/bin/phpunit --filter store_inquiry    ///////////
    }
}
