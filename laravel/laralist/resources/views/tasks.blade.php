@extends('layouts.app')

@section('content')

    <!-- Bootstrap Boilerplate... -->
    <div class="panel-body">
        <!-- Display validation errors -->

        @include('common.errors')

        <!-- New task form -->
        <form action="{{ url('task') }}" method="POST" class="form-horizontal">
            {{ csrf_field() }}

            <!-- Task name -->
            <div class="form-group">
                <label for="task" class="col-sm-3 control-label">Task</label>

                <div class="col-sm-6">
                    <input type="text" name="name" id="task-name" class="form-control">
                </div>
            </div>

            <!-- Add task button -->
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default">
                        <i class="fa fa-plus"></i> Add Task
                    </button>
                </div>
            </div>
        </form>
    </div>

    <hr>

    <!-- current tasks -->
    @foreach($tasks as $task)
        <form action="{{ url('/task/' . $task->id) }}" method="POST">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}
            <div>
                {{ $task->name }}
                <button type="submit"> DELETE </button>
            </div>
        </form>
    @endforeach

@endsection