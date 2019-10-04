<?php

namespace Tests\Feature;

use App\Inquiry;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class InquiryTest extends TestCase
{
    use RefreshDatabase;
    /** @test */
    public function store_inquiry(){
        $this->withoutExceptionHandling();
        $response = $this-> post(route('inquiries.store'), [
            'title'=>'Harikumar',
            'body'=>'I have some problem with your sevices.'
        ]);

        $response->assertOk();
        $this->assertCount(1,Inquiry::all());
           
            /////   ./vendor/bin/phpunit --filter store_inquiry    ///////////
    }
}
