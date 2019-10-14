@extends('layouts.admin')

@section('content')


    <div class="card card-default">
        <div class="card-header">
            Service Request List
        </div>

        <div class="card-body">

            @if($booking->count() > 0)

            <table class="table table-hover">
                    <thead class="thead-dark">

                        <th scope="col">SN</th>
                        <th scope="col" >User Name </th>
                        <th scope="col">Vehicle Brand </th> 
                        <th scope="col">Vehicle Name  </th>
                        <th scope="col" >Service Request Date  </th>
                        <th scope="col">  Action </th>

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
                                    {{ $bookings->created_at }}
                               </td>

                               <td>
                                   {{-- href="{{route('mechanics.edit', $bookings->id)}} --}}
                                    <a href="{{route('service-request-view', $bookings->id)}}" class="btn btn-info btn-sm">
                                            View
                                        </a>
                               </td>

                              
                            </tr>
                        @endforeach
                    </tbody>

                </table>

            @else

                <h3 class="text-center">No Bookings Request Yet</h3>

            @endif
            

            </div>
            </div>


        </div>
    </div>

@endsection
