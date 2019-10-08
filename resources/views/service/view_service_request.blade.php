@extends('layouts.admin')

@section('content')

<div class="card card-default">
        <div class="card-header">
            Service Request View
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

                        
                        @endforeach
                </table>

                <div  >
                <form action="{{route('bookings.update' , $booking->id)}}" method="POST">
                                        @csrf
                                        @method('PUT')
                                <div class="form-group row mt-5">
                                        <label for="service_request" class="col-md-2 col-form-label text-md-right"><strong>Service Request</strong></label>
                                        <div class="col-sm-6">
                                                <select id="service_request"  name="service_request" class="form-control">
                                                        <option value="Select"> Select  </option> 
                                                        <option value="Cancel"> Cancel </option>   
                                               </select>
                                        </div>
                                    </div>

                                <input type="hidden" name="vehicle_brand" value="{{$booking->vehicle_brand}}">
                                <input type="hidden" name="vehicle_name" value="{{$booking->vehicle_name}}">
                                <input type="hidden" name="vehicle_number" value="{{$booking->vehicle_number}}">
                                <input type="hidden" name="service_type" value="{{$booking->service_type}}">
                                <input type="hidden" name="service_date" value="{{$booking->service_date}}">
                                <input type="hidden" name="service_time" value="{{$booking->service_time}}">
                                <input type="hidden" name="servicing" value="pending">
                                <input type="hidden" name="admin_remark" value="{{$booking->admin_remark}}">
                                <input type="hidden" name="service_charge" value="{{$booking->service_charge}}">
                                <input type="hidden" name="parts_change" value="{{$booking->parts_change}}">
                                <input type="hidden" name="additional_charge" value="{{$booking->additional_charge}}">
                                <input type="hidden" name="mechanic_id" value="{{$booking->mechanic_id}}">
                                <input type="hidden" name="user_id" value="{{$booking->user_id}}">
                               
                                

                                
                                
                                <button class="btn-md btn-primary">  Submit  </button>
                                
                            </form>
                </div>

             
                

               

                      
                    

        </div>
</div>

@endsection
