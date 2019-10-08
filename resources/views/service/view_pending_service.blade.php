@extends('layouts.admin')

@section('content')

<div class="card card-default">
        <div class="card-header">
            Update Pending Service 
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
                <form action="{{route('pending-update' , $booking->id)}}" method="POST">
                                        @csrf
                                        @method('PUT')
                                <div class="form-group row mt-5">
                                                
                                       <label for="admin_remark" class="col-md-2 col-form-label text-md-right"><strong> Admin Remark</strong></label>
                                    
                                         <div class="col-md-6">
                                                 <textarea class="form-control" name="admin_remark" rows="5" id="comment"></textarea>
                                                @error('admin_remark')
                                                <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror                         
                                          </div>
                                    </div>
                                    <div class="form-group row">
                                                <label for="service_charge" class="col-md-2 col-form-label text-md-right"><strong> Service Charge</strong></label>
                    
                                                <div class="col-md-6">
                                                    <input id=" " type="number" class="form-control @error('service_charge') is-invalid @enderror" name="service_charge"  required autocomplete="service_charge" autofocus>
                    
                                                    @error('service_charge')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                        <label for="parts_change" class="col-md-2 col-form-label text-md-right"><strong>Parts Change</strong></label>
                            
                                                        <div class="col-md-6">
                                                            <input id="parts_change" type="number" class="form-control @error('parts_change') is-invalid @enderror" name="parts_change"  required autocomplete="parts_change" autofocus>
                            
                                                            @error('parts_change')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                              </div>
                                              <div class="form-group row">
                                                        <label for="parts_change" class="col-md-2 col-form-label text-md-right"><strong>Additional Change</strong></label>
                            
                                                        <div class="col-md-6">
                                                            <input id="additional_charge" type="text" class="form-control @error('additional_charge') is-invalid @enderror" name="additional_charge"  required autocomplete="additional_charge" autofocus>
                            
                                                            @error('additional_charge')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                              </div>

                                              <div class="form-group row ">
                                                        <label for="servicing" class="col-md-2 col-form-label text-md-right"><strong>Servicing</strong></label>
                                                        <div class="col-sm-6">
                                                                <select id="servicing"  name="service_request" class="form-control">
                                                                        <option value="complete"> Complete  </option> 
                                
                                                               </select>
                                                        </div>
                                                </div>

                                <input type="hidden" name="vehicle_brand" value="{{$booking->vehicle_brand}}">
                                <input type="hidden" name="vehicle_name" value="{{$booking->vehicle_name}}">
                                <input type="hidden" name="vehicle_number" value="{{$booking->vehicle_number}}">
                                <input type="hidden" name="service_type" value="{{$booking->service_type}}">
                                <input type="hidden" name="service_date" value="{{$booking->service_date}}">
                                <input type="hidden" name="service_time" value="{{$booking->service_time}}">
                                <input type="hidden" name="mechanic_id" value="{{$booking->mechanic_id}}">
                                <input type="hidden" name="user_id" value="{{$booking->user_id}}">
                                <button type="submit" class="btn-md btn-primary">  Submit  </button>
                                
                            </form>
                </div>

             
                

               

                      
                    

        </div>
</div>

@endsection
