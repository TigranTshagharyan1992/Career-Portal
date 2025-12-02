<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('css/custom-login.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="login-container">
        <img src="{{ asset('images/logo.png') }}" alt="Logo" class="login-logo">
        <h2 class="login-title">Welcome Back</h2>

        <form method="POST" action="{{ route('login.store') }}">
            @csrf

            <input type="text" name="username" class="form-control" placeholder="User Name"
                   value="{{ old('username') }}" required>
            @error('username')
                 <div style="color:red">{{ $message }}</div>
            @enderror

            <div class="form-group">
                <input type="password" name="password" class="form-control" placeholder="Password" required>
            </div>
            @error('password')
                 <div style="color:red">{{ $message }}</div>
            @enderror

            <button type="submit" class="btn-login">Login</button>
        </form>
    </div>
</body>
</html>
