@if(Auth::check())

    @if(auth()->user()->isAdmin())

        <script>window.location = "/admin"</script>

    @else

        <script>window.location = "/home"</script>

    @endif

@else

@extends('layouts.app')

@section('css')

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="{{asset('css/style.css')}}">

@endsection

@section('content')
    <div>
        <div class="content-wrapper d-flex auth auth-bg-1 theme-one" style="margin-top:30px;">
          <div class="row w-100">
            <div class="col-lg-4 mx-auto">
              <div class="auto-form-wrapper">
                <form method="POST" action="{{ route('login') }}">
                  @csrf
                  <div class="form-group">
                      
                    <label class="label">Email</label>
                    <div class="input-group">
                      <input style="font-size:20px;" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                
                      <div class="input-group-append">
                        <span class="input-group-text">
                            <i class="fa fa-address-card" style="font-size:20px;color:red"></i>
                        </span>
                      </div>
                        @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                  </div>

                    <br>

                  <div class="form-group">
                    <label class="label">Password</label>
                    <div class="input-group">
                      <input id="password" style="font-size:20px;" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                      <div class="input-group-append">
                        <span class="input-group-text">
                            <i class="fa fa-key" style="font-size:20px;color:red"></i>
                        </span>
                      </div>
                      @error('password')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                    </div>
                  </div>

                  <div class="form-group">
                    <button type="submit" class="btn btn-primary submit-btn btn-block">Login</button>
                  </div>

                  <div class="text-block text-center my-3">
                    <span class="text-small font-weight-semibold">Not a member ?</span>
                    <a href="{{route('register')}}" class="text-black text-small">Create new account</a>
                  </div>
                </form>
              </div>
              
            </div>
          </div>
        </div>

@endsection
    
@section('scripts')

@endsection
    
@endif 