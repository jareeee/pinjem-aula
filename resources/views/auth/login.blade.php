<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/signin.css">
    <title>Peminjaman Aula | login form</title>
</head>
<body>
    <div class="bg">
    <div class="form">
        <img src="img/hall.png" class="image" >
        <h2>SIGN IN</h2>
        <form action="{{ route('login') }}" method="post" class="input-group">
            @csrf
            <div>
            <input class="input @error('email') is-error @enderror" name="email" type="email" placeholder="Email">
            @error('email')
            <label for="">{{ $message }}</label>
            @enderror
            </div>
            <div>
            <input class="input @error('password') is-error @enderror" name="password" type="password" placeholder="Password">
            @error('password')
            <label for="">{{ $message }}</label>
            @enderror
            </div>
            <div>
            <input class="submit" type="submit" value="SIGN IN">
            </div>
            <small class="acc"><a href="{{ route('password.request') }}">Forgot password?</a></small><br>
            <small class="acc" >Don't have an account ? <a href="{{ route('register') }}">Register</a></small>
        </form>
    </div>
</div>
</body>
</html>