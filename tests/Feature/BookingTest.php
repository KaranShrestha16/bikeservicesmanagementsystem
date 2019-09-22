<?php

namespace Tests\Feature;

use App\Booking;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class BookingTest extends TestCase
{
    use RefreshDatabase;
    /** @test */
    public function user_can_book_for_servicing(){
        $this->withoutExceptionHandling();
        $this-> post(route('mechanics.store'), [
            'name'=>'Harikumar',
            'address'=>'Nepal',
            'contact'=>1234567890
        ]);

        $response = $this->post(route('bookings.store'), [
            'vehicle_brand' => 'bajaj',
            'vehicle_name' => 'pulser 220',
            'vehicle_number' => '789655',
            'service_type' => 'general service',
            'service_date' => '10/9/2019',
            'service_time' => '9:30',
            'mechanic_id' => '1',
            'user_id' => ''
           
            ]);
            $response->assertOk();
            $this->assertCount(1, Booking::all());
            
    }
}
