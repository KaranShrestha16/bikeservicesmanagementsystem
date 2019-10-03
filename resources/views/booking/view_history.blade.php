@extends('layouts.user')

@section('content')

<div class="card card-default">
        <div class="card-header">
            Booking History View
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
                                <th>Service Request</th>
                                <td>{{$booking->service_request}}</td>
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
                                <th>Service Charge</th>
                                <td id="service_charge" >{{$booking->service_charge}}</td>
                        </tr>
                        <tr>
                                <th>Parts Change</th>
                                <td >{{$booking->parts_change}}</td>
                        </tr>
                        <tr>
                                <th>Other Charge (if any)</th>
                                <td id="other_charge" >{{$booking->additional_charge}}</td>
                        </tr>
                        <tr>
                                <th >Total Amount</th>
                                <td id="total" ></td>
                        </tr>
                        @endforeach
                </table>

                <button class="btn-md btn-primary">  Print  </button>
                

               

                      
                    

        </div>
</div>

@endsection

@section('scripts')

<script>
            
       const service_charge=document.getElementById ( "service_charge" ).textContent;
       const other_charge=document.getElementById ( "other_charge" ).textContent;
    const total=service_charge+other_charge;
    document.getElementById ( "total" ).textContent=total;
            console.log(total)

</script>

    

@endsection