@if (Auth::check())

    @if(auth()->user()->isAdmin())

        <script>window.location = "/admin" </script>

    @else

    @extends('layouts.app')

    @section('content')
    <div class="card">
        <div class="card-header">My Profile</div>

            <div class="card-body">

                    

            </div>
        </div>
    </div>
    @endsection

    
    @endif

@else

<script>window.location = "/login" </script>

@endif

