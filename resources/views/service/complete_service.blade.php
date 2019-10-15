@extends('layouts.admin')

@section('content')


    <div class="card card-default">
        <div class="card-header">
            Complete Service List
        </div>

        <div class="card-body">

            @if($booking->count() > 0)

            <table class="table table-hover">
                    <thead class="thead-dark">

                        <th>SN</th>
                        <th>User Name </th>
                        <th>Vehicle Brand </th> 
                        <th>Vehicle Name  </th>
                        <th>Servicing  </th>
                        <th> Action </th>

                    </thead>

                    <tbody> 

                        @foreach($booking as $bookings)

                            <tr>
                                <td>
                                    {{ $bookings->id }}
                                </td>
                                <td>
                                        {{ $bookings->user->name }}
                               </td>
                               <td>
                                    {{ $bookings->vehicle_brand }}
                               </td>
                               <td>
                                    {{ $bookings->vehicle_name }}
                               </td>
                               <td>
                                    {{ $bookings->servicing }}
                               </td>

                               <td>
                                   {{-- href="{{route('mechanics.edit', $bookings->id)}} --}}
                                   <a href="{{route('complete_view', $bookings->id)}}" class="btn btn-info btn-sm">
                                        View
                                    </a>
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
