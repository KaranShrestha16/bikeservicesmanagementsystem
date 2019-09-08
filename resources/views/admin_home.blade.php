@if (Auth::check())

    @if(auth()->user()->isAdmin())

    @extends('layouts.app2')

        @section('content')
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">Dashboard</div>

                        <div class="card-body">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif

                            Welcome, ADMIN
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endsection

    @else

        <script>window.location = "/home"</script>

    @endif

@else

<script>window.location = "/login"</script>

@endif