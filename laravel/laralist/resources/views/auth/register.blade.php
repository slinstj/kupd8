@extends('layouts.app')

@section('content')

    <!-- Bootstrap Boilerplate... -->
    <div class="panel-body">
        <!-- Display validation errors -->

        @include('common.errors')

        <form action="{{ url('auth/register') }}" method="POST" class="form-horizontal">
            {{ csrf_field() }}

            <div class="form-group">
                Name: <input type="text" name="name"><br>
                E-mail: <input type="text" name="email"><br>
                Pass: <input type="text" name="password"><br>
                Pass Confirm: <input type="text" name="password_confirmation">
            </div>

            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default">
                        <i class="fa fa-plus"></i> Register
                    </button>
                </div>
            </div>
        </form>
    </div>

@endsection