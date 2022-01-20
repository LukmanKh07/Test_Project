@extends('layouts.admin')

@section('container')
{{-- <div class="container">

    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}

                </div>
            </div>
        </div>
    </div>
</div> --}}
<div class="container">
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>nama</th>
                <th>alamat</th>
                <th>kontak</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($customer as $todo)
            <tr id="todo_{{$todo->id}}">
                <td>{{ $todo->first_name  }}</td>
                <td>{{ $todo->address }}</td>
                <td>{{ $todo->phone }}</td>
                <td>
                    <a data-id="{{ $todo->id }}" onclick="editTodo(event.target)" class="btn btn-info">Edit</a>
                    <a class="btn btn-danger" onclick="deleteTodo({{ $todo->id }})">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<script>
      function addTodo() {
        var task = $('#task').val();
        let _url     = `/customer`;
        let _token   = $('meta[name="csrf-token"]').attr('content');

        $.ajax({
            url: _url,
            type: "POST",
            data: {
                todo: task,
                _token: _token
            },
            success: function(data) {
                    todo = data
                    $('table tbody').append(`
                        <tr id="todo_${todo.id}">
                            <td>${todo.id}</td>
                            <td>${ todo.todo }</td>
                            <td>
                                <a data-id="${ todo.id }" onclick="editTodo(${todo.id})" class="btn btn-info">Edit</a>
                                <a data-id="${todo.id}" class="btn btn-danger" onclick="deleteTodo(${todo.id})">Delete</a>
                            </td>
                        </tr>
                    `);

                    $('#task').val('');

                    $('#addTodoModal').modal('hide');
            },
            error: function(response) {
                $('#taskError').text(response.responseJSON.errors.todo);
            }
        });
    }

    function deleteTodo(id) {
        let url = `/todos/${id}`;
        let token   = $('meta[name="csrf-token"]').attr('content');

        $.ajax({
            url: url,
            type: 'DELETE',
            data: {
            _token: token
            },
            success: function(response) {
                $("#todo_"+id).remove();
            }
        });
    }

    function editTodo(e) {
        var id  = $(e).data("id");
        var todo  = $("#todo_"+id+" td:nth-child(2)").html();
        $("#todo_id").val(id);
        $("#edittask").val(todo);
        $('#editTodoModal').modal('show');
    }

    function updateTodo() {
        var task = $('#edittask').val();
        var id = $('#todo_id').val();
        let _url     = `/todos/${id}`;
        let _token   = $('meta[name="csrf-token"]').attr('content');

        $.ajax({
            url: _url,
            type: "PUT",
            data: {
                todo: task,
                _token: _token
            },
            success: function(data) {
                    todo = data
                    $("#todo_"+id+" td:nth-child(2)").html(todo.todo);
                    $('#todo_id').val('');
                    $('#edittask').val('');
                    $('#editTodoModal').modal('hide');
            },
            error: function(response) {
                $('#taskError').text(response.responseJSON.errors.todo);
            }
        });
    }

      
      
    </script>

@endsection
