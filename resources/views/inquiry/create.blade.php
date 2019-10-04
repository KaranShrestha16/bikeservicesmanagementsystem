@extends('layouts.user')

@section('content')
    


    <div class="card card-default">
        <div class="card-header">
            Create Inquiry
        </div>

        <div class="card-body">

            @include('partials.error')

            <form action="{{route('inquiries.store')}}" method="POST">

                @csrf

                <div class="form-group row">
                    <label for="title" class="col-md-4 col-form-label text-md-right">{{ __('Title') }}</label>

                    <div class="col-md-6">
                        <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title">

                            @error('title')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                    </div>
                </div>


                
                <div class="form-group row">
                    <label for="body" class="col-md-4 col-form-label text-md-right">{{ __('Body') }}</label>

                    <div class="col-md-6">
                        <textarea id="body" class="form-control @error('body') is-invalid @enderror" name="body"> </textarea>

                            @error('body')
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