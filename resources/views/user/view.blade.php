@if (Auth::check())

    @if(auth()->user()->isAdmin())

        <script>window.location = "/admin" </script>

    @else

    @extends('layouts.app')

    @section('content')
    <div class="card">
        <div class="card-header">My Profile</div>

            <div class="card-body">

                <img src="{{ asset('john.jpg') }}" style=" 
                    width:300px;height:300px;margin-bottom:30px;border-radius:50%;margin-left:30%;
                " alt="">
                
                <table class="table">

                    <tbody>
                        <tr>
                            <td style="font-size:18px;"><b>Name: </b></td>
                            <td style="font-size:18px;">{{ $user->name }}</td>
                        </tr>

                        <tr>
                            <td style="font-size:18px;"><b>Email:</b></td>
                            <td style="font-size:18px;">{{ $user->email }}</td>
                        </tr>

                        <tr>
                            <td style="font-size:18px;"><b>Address:</b></td>
                            <td style="font-size:18px;">{{ $user->address }}</td>
                        </tr>

                        <tr>
                            <td style="font-size:18px;"><b>Phone No:</b></td>
                            <td style="font-size:18px;">{{ $user->phoneno }}</td>
                        </tr>

                    </tbody>

                </table>

                <a href="#" class="btn btn-success">Update Profile</a>

            </div>
        </div>
    </div>
    @endsection

    
    @endif

@else

<script>window.location = "/login" </script>

@endif

