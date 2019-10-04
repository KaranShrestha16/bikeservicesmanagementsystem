@extends('layouts.admin')

@section('content')
    


    <div class="card card-default">
        <div class="card-header">
            Create Inquiry
        </div>

        <div class="card-body">

            @include('partials.error')

            <form action="{{route('inquiries.update',$id)}}" method="POST">

                @csrf

                @method('PUT')
                
                <div class="form-group row">
                    <label for="response" class="col-md-4 col-form-label text-md-right">{{ __('Response') }}</label>

                    <div class="col-md-6">
                        <textarea id="response" class="form-control @error('response') is-invalid @enderror" name="response" > </textarea>

                            @error('response')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                    </div>
                </div>

                <div class="form-group"> 

                <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-success">
                                    Submit Inquiry
                                </button>
                            </div>
                        </div>
                            
                </div>


            </form>
        </div>

    </div>

@endsection