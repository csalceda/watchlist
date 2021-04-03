<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Login</title>

    {{-- Stylesheets --}}
    <link rel="stylesheet" href="https://bootswatch.com/4/flatly/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">

</head>
<body>

<div class="container flex justify-center bg-light my-4">
    <h4 class="pt-4 px-4">Admin Login</h4>
    @if(session('status'))
        <div class="p-3 mb-2 container bg-danger text-white">
            {{session('status')}}
        </div>
    @endif

    <form action="{{ route('login') }}" method="post">
        @csrf
        <div class="m-4">
            <label for="email">Email</label>
            <input type="text" name="email" id="email" placeholder="Email" class="form-control @error('email') border border-danger @enderror" value="{{ old('email') }}">
        </div>
            @error('email')
                <div class="m-2 text-danger">
                    {{ $message }}
                </div>
            @enderror
        <div class="m-4">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" placeholder="Password" class="form-control @error('password') border border-danger @enderror" value="">
        </div>
            @error('password')
                <div class="m-2 text-danger">
                    {{ $message }}
                </div>
            @enderror
        <div class="px-4">
            <input type="checkbox" name="remember" id="remember" class="form-check-input px-4">
            <label for="remember">Remember me</label>
        </div>
        <div class="mx-4">
            <a href="{{ route('register') }}">Sign-up</a>
        </div>
        <div class="m-4 pb-4">
            <button type="submit" class="btn btn-primary btn-block">Login</button>
        </div>
    </form>
</div>

</body>
</html>