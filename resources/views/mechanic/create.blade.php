@extends('layouts.app2')

@section('content')
    


    <div class="card card-default">
        <div class="card-header">
            {{  isset($mechanic) ? 'Edit Mechanic' : 'Create Mechanic'}}
        </div>

        <div class="card-body">

            @include('partials.error')

            <form action="{{ isset($mechanic) ? route('mechanics.update' , $mechanic->id) : 
                route('mechanics.store') }}" method="POST">

                @csrf

                @if(isset($mechanic))

                    @method('PUT')

                @endif

                <div class="form-group">

                    <label for="name">Name</label>

                    <input type="text" class="form-control" name="name" value="{{ isset($mechanic) ? 
                    $mechanic->name : '' }}">
                    
                </div>

                <div class="form-group">

                    <label for="address">Address</label>

                        <input type="text" class="form-control" name="address" value="{{ isset($mechanic) ? 
                        $mechanic->address : '' }}">

                    </div>

                <div class="form-group">

                    <label for="contact">Contact</label>

                        <input type="text" class="form-control" name="contact" value="{{ isset($mechanic) ? 
                        $mechanic->contact : '' }}">

                </div>

                <div class="form-group"> 

                    <button class="btn btn-success">
                        {{  isset($mechanic) ? 'Update Mechanic' : 'Add Mechanic'}}
                    </button>
                            
                </div>


            </form>
        </div>

    </div>

@endsection