@if (Auth::check())

    @if(auth()->user()->isAdmin())

        <script>window.location = "/admin" </script>

    @else

    @extends('layouts.app')

    @section('content')
    <div class="card">
        <div class="card-header">My Profile</div>

            <div class="card-body">

                <img src="" style=" 
                    width:300px;height:300px;background-color:black;margin-bottom:30px;border-radius:50%;margin-left:30%;
                " alt="">
                
                <table class="table">

                    <tbody>
                        <tr>
                            <td>Name: </td>
                            <td>{{ $user->name }}</td>
                        </tr>

                        <tr>
                            <td>Email</td>
                            <td>{{ $user->email }}</td>
                        </tr>

                        <tr>
                            <td>Address</td>
                            <td>{{ $user->address }}</td>
                        </tr>

                        <tr>
                            <td>Phone No</td>
                            <td>{{ $user->phoneno }}</td>
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

