@extends('layouts.app')

@section('css')

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="{{asset('css/style.css')}}">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


@endsection

@section('content')
    <div>
        <div class="content-wrapper d-flex auth auth-bg-1 theme-one" style="margin-top:30px;">
          <div class="row w-100">
            <div class="col-lg-4 mx-auto">
              <div class="auto-form-wrapper">
                <form method="POST" action="{{ route('register') }}">
                  @csrf
                  <div class="form-group">
                      
                      <label class="label">Name</label>
                    <div class="input-group">
                      <input id="name" type="text" style="font-size:20px;" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                      <div class="input-group-append">
                        <span class="input-group-text">
                        <i class="material-icons" style="font-size:20px;color:red">person</i>
                        </span>
                      </div>
                        @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                  </div>

                  <br>

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
                  <div class="form-group">
                    <label class="label">Password</label>
                    <div class="input-group">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                      <div class="input-group-append">
                        <span class="input-group-text">
                            <i class="fa fa-key" style="font-size:20px;color:red"></i>
                        </span>
                      </div>
                    </div>
                    
                    @error('password')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                    @enderror
                  </div>
                  </div>

                  <br>

                  <div class="form-group">
                  <label class="label">Confirm Password</label>
                    <div class="input-group">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">    
                      <div class="input-group-append">
                        <span class="input-group-text">
                            <i class="fa fa-key" style="font-size:20px;color:red"></i>
                        </span>
                      </div>
                    </div>
                    <span id="message"></span>
                  </div>
                  
                    <br>

                    
                  <div class="form-group">
                  <label class="label">Phoneno</label>
                    <div class="input-group">
                      <input style="font-size:20px;" id="phoneno" type="number" class="form-control @error('phoneno') is-invalid @enderror" name="phoneno" value="{{ old('phoneno') }}" required autocomplete="phoneno" autofocus>
                      <div class="input-group-append">
                        <span class="input-group-text">
                            <i class="material-icons" style="font-size:20px;color:red">phone</i>
                        </span>
                      </div>
                      
                        @error('phoneno')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                  </div>

                  <br>

                  <div class="form-group">
                  <label class="label">Address</label>
                    <div class="input-group">
                      <input style="font-size:20px;" id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" required autocomplete="address" autofocus>
                      <div class="input-group-append">
                        <span class="input-group-text">
                            <i class='fas fa-address-book' style='font-size:20px;color:red'></i>
                        </span>
                      </div>
                      
                        @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                  </div>

                  <br>

                  <div class="form-group">
                    <button type="submit" class="btn btn-primary submit-btn btn-block">Register</button>
                  </div>

                  <div class="text-block text-center my-3">
                    <span class="text-small font-weight-semibold">Already Registered ?</span>
                    <a href="{{route('login')}}" class="text-black text-small">Sign in Here.</a>
                  </div>
                </form>
              </div>
              
            </div>
          </div>
        </div>

@endsection
    
@section('scripts')

    <script>
        $('#password, #password-confirm').on('keyup', function () {
        if ($('#password').val() == $('#password-confirm').val()) {
            $('#message').html('Matching').css('color', 'green');
        } else 
            $('#message').html('Not Matching').css('color', 'red');
        });
    </script>

    <script src='https://kit.fontawesome.com/a076d05399.js'></script>

@endsection