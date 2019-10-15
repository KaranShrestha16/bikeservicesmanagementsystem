@extends('layouts.user')

@section('content')


<div class="card card-default">
        <div class="card-header">
            Booking History
        </div>

        <div class="card-body">

                @if($booking->count() > 0)

                <table class="table table-hover">
                        <thead class="thead-dark">
                          <tr>
                            <th scope="col">SN</th>
                            <th scope="col">Vehical Name</th>
                            <th scope="col">Booking Status</th>
                            <th scope="col">Booking Request Date</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                                @foreach($booking as $bookings)

                                <tr>
                                    <td>
                                        {{ $bookings->id }}
                                    </td>
                                    <td>
                                            {{ $bookings->vehicle_name }}
                                   </td>
                                   <td>
                                        {{ $bookings->servicing }}
                                   </td>
                                   
                                   <td>
                                        {{ $bookings->created_at }}
                                   </td>
                                   <td>
                                       {{-- href="{{route('mechanics.edit', $bookings->id)}} --}}
                                   <a href="{{route('bookings.show',$bookings->id)}}" class="btn btn-primary btn-sm">
                                                View
                                            </a>
                                   </td>
                                </tr>
                            @endforeach
                         
                        </tbody>
                      </table>
                      @else
                      <h3 class="text-center">No Bookings History</h3>
                      @endif


                      
                    

        </div>
</div>

@endsection

@section('scripts')

    

@endsection