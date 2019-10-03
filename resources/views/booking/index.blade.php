@extends('layouts.user')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md">
            <div class="card">
                <div class="card-header">{{ __('Booking Form') }}</div>

                <div class="card-body">
                <form method="POST" action="{{route('bookings.store')}}">
                        @csrf

                        <input name="user_id" id="user_id" type="hidden" value="{{$user->id}}" >

                        <div class="form-group row">
                            <label for="vehicle_brand" class="col-md-4 col-form-label text-md-right">{{ __('Vehicle Brand:') }}</label>

                            <div class="col-md-6">
                                <input id="vehicle_brand" type="text" class="form-control @error('vehicle_brand') is-invalid @enderror" name="vehicle_brand"  required autocomplete="vehicle_brand" autofocus>

                                @error('vehicle_brand')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="vehicle_name" class="col-md-4 col-form-label text-md-right">{{ __('Vehicle Name:') }}</label>

                            <div class="col-md-6">
                                <input id="vehicle_name" type="text" class="form-control @error('vehicle_name') is-invalid @enderror" name="vehicle_name"  required autocomplete="vehicle_name" autofocus>

                                @error('vehicle_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>                

                        <div class="form-group row">
                            <label for="vehicle_number" class="col-md-4 col-form-label text-md-right">{{ __('Vehicle Registration Number:') }}</label>

                            <div class="col-md-6">
                                <input id="vehicle_number" type="text" class="form-control @error('vehicle_number') is-invalid @enderror" name="vehicle_number"  required autocomplete="vehicle_number" autofocus>

                                @error('vehicle_number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="service_type" class="col-md-4 col-form-label text-md-right">{{ __('Service Type:') }}</label>
                            <div class="col-sm-6">
                                    <select id="service_type" onclick="runfunction()" name="service_type" class="form-control">
                                            <option value="0"> Select Service Type</option>
                                            <option value="Advance"> Advance  </option> 
                                            <option value="Basic"> Basic</option>   
                                   </select>
                            </div>
                        </div>

                        <div  class="form-group row">
                            <label for="mechanics" class="col-md-4 col-form-label text-md-right">{{ __('Mechanic Name:') }}</label>
                            <div class="col-sm-6">
                                <select id="advance" name="mechanic_id" class="form-control">
                                       <option> Select Mechanic</option>
                                        @if($mechanic->count() > 0)
                                        @foreach($mechanic as $mechanics)
                                        @if($mechanics->type=="Advance")
                                        <option value="{{ $mechanics->id }}" >  {{ $mechanics->name }} </option>   
                                        @endif
                                        @endforeach
                                        @else
                                        <option> <h3 class="text-center">No Mechanics Added Yet</h3></option>  
                        
                                    @endif
                                  
                               </select>
                               <select id="basic" name="mechanic_id" class="form-control">
                                <option> Select Mechanic</option>
                                 @if($mechanic->count() > 0)
                                 @foreach($mechanic as $mechanics)
                                 @if($mechanics->type=="Basic")
                                 <option value="{{ $mechanics->id }}" >  {{ $mechanics->name }} </option>   
                                 @endif
                                 @endforeach
                                 @else
                                 <option> <h3 class="text-center">No Mechanics Added Yet</h3></option>  
                 
                             @endif
                        </select>

                        @error('mechanic_id')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                          </div>
                        </div>

                         

                        <div class="form-group row">
                            <label for="service_date" class="col-md-4 col-form-label text-md-right">{{ __('Service Date:') }}</label>

                            <div class="col-md-6">
                                <input id="service_date" type="text" class="form-control @error('service_date') is-invalid @enderror" name="service_date"  required autocomplete="service_date" autofocus>

                                @error('service_date')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="service_time" class="col-md-4 col-form-label text-md-right">{{ __('Service Time:') }}</label>

                            <div class="col-md-6">
                                
                                    <select id="service_time" name="service_time" class="form-control">
                                            <option value="0"> Select Service Type</option>
                                            <option value="9-11"> 9-11  </option> 
                                            <option value="11-1"> 11-1</option>   
                                            <option value="1-3"> 1-3</option>  
                                            <option value="3-5"> 3-5</option>  
                                   </select>
                                  
                                @error('service_time')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <input type="hidden" name="servicing" value="Wait for approve">
                        <input type="hidden" name="admin_remark" value="No Action Taken Yet">
                        <input type="hidden" name="service_charge" value="0">
                        <input type="hidden" name="parts_change" value="0">
                        <input type="hidden" name="additional_charge" value="0">
                        <input type="hidden" name="service_request" value="wait for admin approval">

                     

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Summit') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')

    <script>
        flatpickr('#service_date');
    </script>
    <script>

   $("#advance").hide();
   $("#basic").attr("disabled", true);
  

         function runfunction()
        {


           
            const service_type = document.getElementById("service_type");
            const service_type_value = service_type.options[service_type.selectedIndex].value; 
            
            
         if(service_type_value=="0"){
                $('#advance').hide() ;
                $("#basic").attr("disabled", true);
               
            }else  if(service_type_value=="Advance"){
                $("#advance").show();
                $('#basic').hide();
                $("#advance").attr("disabled", false);
              
            } else if(service_type_value=="Basic"){
                $('#basic').show() 
                $('#advance').hide() 
                $("#basic").attr("disabled", false);
               
            }
               
           
        }

    
    
    </script>
    

@endsection