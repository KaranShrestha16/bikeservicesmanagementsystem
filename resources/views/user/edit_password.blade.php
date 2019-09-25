@extends('layouts.user')

@section('content')
    


    <div class="card card-default">
        <div class="card-header">
            Change Password
        </div>

        <div class="card-body">

            @include('partials.error')

            <form action="{{route('users.update-password')}}" method="POST">

                @csrf

                @method('PUT')

                <div class="form-group row">
                    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                    <div class="col-md-6">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                        <div class="col-md-6">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        </div>
                </div>

                <div class="form-group"> 

                <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-success">
                                    Update Password
                                </button>
                            </div>
                        </div>
                            
                </div>


            </form>
        </div>

    </div>

@endsection