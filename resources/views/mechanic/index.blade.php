@extends('layouts.app2')

@section('content')
    
    <div class="d-flex justify-content-end mb-2">

    <a href="{{route('mechanics.create')}}" class="btn btn-success">Add Mechanic</a>

    </div>

    <div class="card card-default">
        <div class="card-header">
            Mechanics
        </div>

        <div class="card-body">

            @if($mechanic->count() > 0)

                <table class="table">

                    <thead>

                        <th>Name</th>
                        <th>Posts Count</th>
                        <th></th>
                    </thead>

                    <tbody> 

                        @foreach($mechanic as $mechanics)

                            <tr>
                                <td>
                                    {{ $mechanics->name }}
                                </td>

                                <td>{{ $mechanics->count() }}</td>

                                <td>
                                    <a href="{{route('mechanics.edit', $mechanics->id)}}" class="btn btn-info btn-sm">
                                        Edit
                                    </a>

                                    <button class="btn btn-danger btn-sm" onclick="handleDelete({{ $mechanics->id }})">

                                        Delete

                                    </button>

                                </td>
                            </tr>
                        @endforeach
                    </tbody>

                </table>

            @else

                <h3 class="text-center">No mechanics yet</h3>

            @endif
            

            <div class="modal fade" id="DeleteModal" tabindex="-1" role="dialog" aria-labelledby="DeleteModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">

                <form action="" method="POST" id="deleteMechanicForm">

                    @csrf

                    @method('DELETE')

                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="DeleteModalLabel">Delete Mechanic</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p class="text-denter text-bold">
                            Are you sure you want to delete this Mechanic?
                        </p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                        <button type="submit" class="btn btn-danger">Yes, Delete</button>
                    </div>
                    </div>

                </form>
            </div>
            </div>


        </div>
    </div>

@endsection

@section('scripts')

    <script>
    
        function handleDelete(id)
        {

            var form = document.getElementById('deleteMechanicForm')
            form.action = '/mechanics/' + id
            $('#DeleteModal').modal('show')
        }
    
    </script>

@endsection