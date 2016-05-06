@extends('layouts.app')

@section('content')

    <!-- Bootstrap Boilerplate... -->
    <div class="panel-body">
        <!-- Display validation errors -->

        @include('common.errors')

        <form action="{{ url('auth/login') }}" method="POST" class="form-horizontal">
            {{ csrf_field() }}

            <div class="form-group">
                E-mail: <input type="text" name="email"><br>
                Pass: <input type="text" name="password">
            </div>

            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default">
                        <i class="fa fa-plus"></i> Login
                    </button>
                </div>
            </div>
        </form>
        <a href="{{ url('auth/register') }}">Register</a>
    </div>

@endsection