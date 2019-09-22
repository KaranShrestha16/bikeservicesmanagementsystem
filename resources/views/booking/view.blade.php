@extends('layouts.app2')

@section('content')
    
    <div class="d-flex justify-content-end mb-2">

    <a href="{{route('mechanics.create')}}" class="btn btn-success">Add Mechanic</a>

    </div>

    <div class="card card-default">
        <div class="card-header">
            Mechanics
        </div>

        <div class="card-body">

            @if($booking->count() > 0)

                <table class="table">

                    <thead>

                        <th>SN</th>
                        <th>User Id </th>
                        <th>Vehicle Brand </th> 
                        <th>Vehicle Name </th>
                        <th>Vehicle Number </th>

                    </thead>

                    <tbody> 

                        @foreach($booking as $bookings)

                            <tr>
                                <td>
                                    {{ $bookings->id }}
                                </td>
                                <td>
                                        {{ $bookings->user_id }}
                               </td>
                               <td>
                                    {{ $bookings->vehicle_brand }}
                               </td>
                               <td>
                                    {{ $bookings->vehicle_name }}
                               </td>
                               <td>
                                    {{ $bookings->vehicle_number }}
                               </td>

                              
                            </tr>
                        @endforeach
                    </tbody>

                </table>

            @else

                <h3 class="text-center">No Bookings Yet</h3>

            @endif
            

            </div>
            </div>


        </div>
    </div>

@endsection
