<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"
          integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js"
            integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"
            crossorigin="anonymous"></script>
</head>


<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">{{config('app.name') ?? 'labwork2'}}</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                @auth
                    <a href="{{ url('/home') }}" class="nav-link">Home</a>
                @else
                    <a href="{{ route('login') }}" class="nav-link">Log in</a>
            <li class="nav-item active">
                @if (Route::has('register'))
                    <a href="{{ route('register') }}"
                       class="nav-link">Register</a>
                @endif
            </li>

            @endauth
        </ul>
    </div>
</nav>
<body class="container">
<div class="card pt-3 pb-3 mt-3">
    <div class="card-header">{{config('app.name')}} demo</div>
    <div class="card-body">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
       <form class="form-control" action="{{route('safe-submit')}}" method="post" id="myForm">
                {{-- <form class="form-control" action="{{route('dangerous-submit')}}" method="post" id="myForm"> --}}
            @csrf
            <label for="name" class="col-form-label">name</label>
            <input type="text" name="name" id="name" class="form-control">
            <div></div>
            <label class="col-form-label" for="blood">blood type</label>
            <select name="blood" id="blood" class="form-select-sm">
                <option>select option</option>
                <option value="A+">A+</option>
                <option value="A-">A-</option>
                <option value="B+">B+</option>
                <option value="B-">B-</option>
                <option value="AB+">AB+</option>
                <option value="AB-">AB-</option>
                <option value="O+">O+</option>
                <option value="O-">O-</option>
            </select>
            <div></div>
            <div style="text-align: center;">
                <button class="btn btn-outline-success text-capitalize mt-5" type="submit">Submit</button>
            </div>
        </form>
    </div>
    <div class="card-footer">

    </div>
</div>
</body>
</html>
