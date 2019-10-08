@if (Auth::check())

    @if(auth()->user()->isAdmin())

        <script>window.location = "/admin" </script>

    @else

    @extends('layouts.user')

    @section('content')
    <div class="card">
        <div class="card-header">My Profile</div>

            <div class="card-body">

                <form method="POST" action="{{ route('users.update-profile') }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" value="{{$user->name}}" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="phoneno" class="col-md-4 col-form-label text-md-right">{{ __('Phone Number') }}</label>

                            <div class="col-md-6">
                                <input id="phoneno" value="{{$user->phoneno}}" type="number" class="form-control @error('phoneno') is-invalid @enderror" name="phoneno" value="{{ old('phoneno') }}" required autocomplete="phoneno">

                                @error('phoneno')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="address"  class="col-md-4 col-form-label text-md-right">{{ __('Address') }}</label>

                            <div class="col-md-6">
                                <input id="address" value="{{$user->address}}" type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" required autocomplete="address">

                                @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">

                            <div class="col-md-6">

                                <label for="image">Browse Image</label>

                                <input type="file" class="image" name="image" id="image">

                            </div>
                        
                        </div>  

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-success">
                                    {{ __('Update Profile') }}
                                </button>
                            </div>
                        </div>
                </form>
  
            </div>
        </div>
    </div>
    @endsection

    
    @endif

@else

<script>window.location = "/login" </script>

@endif

