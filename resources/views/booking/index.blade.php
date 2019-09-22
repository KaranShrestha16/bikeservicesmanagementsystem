@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md">
            <div class="card">
                <div class="card-header">{{ __('Booking Form') }}</div>

                <div class="card-body">
                <form method="POST" action="">
                        @csrf

                        <div class="form-group row">
                            <label for="vehicle_band" class="col-md-4 col-form-label text-md-right">{{ __('Vehicle Band:') }}</label>

                            <div class="col-md-6">
                                <input id="vehicle_band" type="text" class="form-control @error('vehicle_band') is-invalid @enderror" name="vehicle_band"  required autocomplete="vehicle_band" autofocus>

                                @error('vehicle_band')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="vehicle_name" class="col-md-4 col-form-label text-md-right">{{ __('Vehicle Name:') }}</label>

                            <div class="col-md-6">
                                <input id="vehicle_name" type="text" class="form-control @error('vehicle_name') is-invalid @enderror" name="vehicle_name"  required autocomplete="vehicle_name" autofocus>

                                @error('vehicle_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>                

                        <div class="form-group row">
                            <label for="vehicle_number" class="col-md-4 col-form-label text-md-right">{{ __('Vehicle Registration Number:') }}</label>

                            <div class="col-md-6">
                                <input id="vehicle_number" type="text" class="form-control @error('vehicle_number') is-invalid @enderror" name="vehicle_number"  required autocomplete="vehicle_number" autofocus>

                                @error('vehicle_number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="service_type" class="col-md-4 col-form-label text-md-right">{{ __('Service Type:') }}</label>

                            <div class="col-md-6">
                                <input id="service_type" type="text" class="form-control @error('service_type') is-invalid @enderror" name="service_type"  required autocomplete="service_type" autofocus>

                                @error('service_type')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="service_date" class="col-md-4 col-form-label text-md-right">{{ __('Service Date:') }}</label>

                            <div class="col-md-6">
                                <input id="service_date" type="text" class="form-control @error('service_date') is-invalid @enderror" name="service_date"  required autocomplete="service_date" autofocus>

                                @error('service_date')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="service_time" class="col-md-4 col-form-label text-md-right">{{ __('Service Time:') }}</label>

                            <div class="col-md-6">
                                <input id="service_time" type="text" class="form-control @error('service_time') is-invalid @enderror" name="service_time"  required autocomplete="service_time" autofocus>

                                @error('service_time')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="mechanics" class="col-md-4 col-form-label text-md-right">{{ __('Mechanic Name:') }}</label>

                            <div class="col-md-6">
                                <input id="mechanics" type="text" class="form-control @error('mechanics') is-invalid @enderror" name="mechanics"  required autocomplete="mechanics" autofocus>

                                @error('mechanics')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Summit') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
    

@endsection