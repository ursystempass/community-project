<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Login</title>
</head>
<body>
    <div class="w-50 center border rounded px-3 py-3 mx-auto">
        <h1>Login</h1>
        <form action="/sesi/login" method="POST">
            @csrf
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" value="{{ Session::get('email') }}" name="email" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}">
                @error('email')
                    <div class="invalid-feedback">{{$message}}</div>
                @enderror
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" value="{{ Session::get('password') }}" name="password" class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}">
                @error('password')
                    <div class="invalid-feedback">{{$message}}</div>
                @enderror
                <br>
            <div class="mb-3 d-grid">
                <button name="submit" type="submit" class="btn btn-warning">Login</button>
            </div>
        </form>
        <form action="sesi/register">
        <div class="mb-3 d-grid">
                <button name="submit" type="submit" class="btn btn-warning">Register</button>
            </div>
        </form>
    </div>

</body>
</html>
