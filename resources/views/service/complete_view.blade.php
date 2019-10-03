@extends('layouts.admin')

@section('content')

<div class="card card-default">
        <div class="card-header">
            Completed Services
        </div>

        <div class="card-body ">

            <table class="table table-hover table-bordered">
                @foreach ($bookings as $booking)
                  <tr>
                    <th scope="col">Service Request Date</th>
                  <td>{{$booking->created_at}}</td>                           
                  </tr>
                  <tr>
                      <th>Vehical Brand</th>
                      <td>{{$booking->vehicle_brand}}</td>
                  </tr>
                  <tr>
                        <th>Vehical Name</th>
                        <td>{{$booking->vehicle_name}}</td>
                  </tr>
                  <tr>
                        <th>Vehical Registration Number</th>
                        <td>{{$booking->vehicle_number}}</td>
                </tr>
                <tr>
                        <th>Service Type</th>
                        <td>{{$booking->service_type}}</td>
                 </tr>
                 <tr>
                        <th>Service Date</th>
                        <td>{{$booking->service_date}}</td>
                </tr>
                <tr>
                        <th>Service Time</th>
                        <td>{{$booking->service_time}}</td>
                </tr>
                
                <tr>
                        <th>Mechanic Name</th>
                        <td>{{$booking->mechanic->name}}</td>
                </tr>
               
                <tr>
                        <th>Servicing Work</th>
                        <td>{{$booking->servicing}}</td>
                </tr>
                <tr>
                        <th>Service Request</th>
                        <td>{{$booking->service_request}}</td>
                </tr>

                <tr>
                    <th>Service Charge</th>
                    <td>{{$booking->service_charge}}</td>
                </tr>

                <tr>
                    <th>Parts Charge</th>
                    <td>{{$booking->parts_change}}</td>
                </tr>

                <tr>
                    <th>Additional Charge</th>
                    <td>{{$booking->additional_charge}}</td>
                </tr>

                <tr>
                    <th>Total Charge</th>
                    <td>{{($booking->service_charge) + ($booking->additional_charge) + ($booking->parts_change)}}</td>
                </tr>

                
                @endforeach
        </table>
      

        </div>
</div>

@endsection
