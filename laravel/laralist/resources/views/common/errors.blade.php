
@if (count($errors) > 0)
    <!-- form error list -->
    <div class="alert alert-danger">
        <strong>Whoops! Something went wrong!</strong>

        <br><br>

        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}
            @endforeach
        </ul>
    </div>
@endif
