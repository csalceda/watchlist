<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Register</title>

    {{-- Stylesheets --}}
    <link rel="stylesheet" href="https://bootswatch.com/4/flatly/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">

</head>
<body>

<div class="container flex justify-center bg-light my-4">
    <h4 class="p-4">Admin Register</h4>
        <form action="{{ route('register') }}" method="post">
            @csrf
            <div class="m-4">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" placeholder="Name" class="form-control @error('name') border border-danger @enderror" value="{{ old('name') }}">

                @error('name')
                    <div class="m-2 text-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="m-4">
                <label for="username">Username</label>
                <input type="text" name="username" id="username" placeholder="Username" class="form-control @error('username') border border-danger @enderror" value="{{ old('username') }}">
            </div>
                @error('username')
                    <div class="m-2 text-danger">
                        {{ $message }}
                    </div>
                @enderror
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
            <div class="m-4">
                <label for="password_confirmation">Confirm Password</label>
                <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Repeat your password" class="form-control" value="">
            </div>
            <div class="m-4">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
</div>
    
    {{-- Scripts --}}
    <script src="https://code.jquery.com/jquery-1.12.4.js" integrity="sha256-Qw82+bXyGq6MydymqBxNPYTaUXXq7c8v3CwiYwLLNXU=" crossorigin="anonymous"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>