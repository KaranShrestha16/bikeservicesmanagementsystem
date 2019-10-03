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
        $response = $this->post(route('bookings.store'), [
            'vehicle_brand' => 'jaba',
            'vehicle_name' => 'pulser 220',
            'vehicle_number' => '789655',
            'service_type' => 'general service',
            'service_date' => '10/9/2019',
            'service_time' => '9:30',
            'mechanic_id' => '1',
            'servicing' => 'pending',
            'service_request' => 'wait for admin approval',
            'user_id' => '1',
            'admin_remark' =>'wait for admin approval',
            'service_charge' =>'0',
            'parts_change' => '0',
            'additional_charge' =>'0'
            ]);
            
            $response->assertOk();
            $this->assertCount(1, Booking::all());
            
    }
    
  /** @test */
    public function admin_can_update_booking(){

        
        
        $this->post(route('bookings.store'), [
            'vehicle_brand' => 'jaba',
            'vehicle_name' => 'pulser 220',
            'vehicle_number' => '789655',
            'service_type' => 'general service',
            'service_date' => '10/9/2019',
            'service_time' => '9:30',
            'mechanic_id' => '1',
            'servicing' => 'pending',
            'service_request' => 'wait for admin approval',
            'user_id' => '1',
            'admin_remark' =>'wait for admin approval',
            'service_charge' =>'0',
            'parts_change' => '0',
            'additional_charge' =>'0'
           
            ]);

         $booking=Booking::first();
        $response = $this->patch(route('bookings.update',$booking->id), [
            'vehicle_brand' => 'bajaj',
            'vehicle_name' => 'pulser 150',
            'vehicle_number' => '789655',
            'service_type' => 'advance',
            'service_date' => '10/9/2019',
            'service_time' => '9:30',
            'mechanic_id' => '1',
            'servicing' => 'pending',
            'service_request' => 'wait for admin approval',
            'user_id' => '1',
            'admin_remark' =>'wait for admin approval',
            'service_charge' =>'0',
            'parts_change' => '0',
            'additional_charge' =>'0'
           
            ]);
            $this->assertEquals('bajaj',Booking::first()->vehicle_brand);
            $this->assertEquals('pulser 150',Booking::first()->vehicle_name);
            $this->assertEquals('789655',Booking::first()->vehicle_number);
            
    }
}
