@extends('layouts.app')

@section('content')
<div class="container">
    <div id="main-table" class="card">
        <div class="card-header row">
            <div class="col-6">
                My Todos
            </div>
            <div class="col-6 text-end">
                <button id="create-form-btn" class="btn btn-sm btn-primary">Add Todo</button>
            </div>
        </div><!-- /.card-header -->

        <div class="card-body" style="height: 400px; overflow-y: scroll">
                <table class="table text-center">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                </table>
        </div><!-- /.card-body -->
    </div><!-- /.card -->

    @include('todos.incs._create')
</div><!-- /.container -->
@endsection

@push('custome-js')
<script>
$('document').ready(function () {
    $('#create-form-btn').click(function () {
        $('#main-table').slideUp(500);
        $('#create-todo-form').slideDown(500);
    });

    $('#close-create-form-btn').click(function () {
        $('#main-table').slideDown(500);
        $('#create-todo-form').slideUp(500);
    });

    $('#store-todo').click(function () {
        // get data from the form
        // validate the data
        // send request
        // show success or failer from the response

        let data = {
            title : $('#title').val(),
            description : $('#description').val()
        } 

        axios.post(`{{ route('todos.store') }}`, {
            _token : '{{ csrf_token() }}',
            ...data
        }).then(res => {
            console.log(res);
        })
    });
});
</script>
@endpush