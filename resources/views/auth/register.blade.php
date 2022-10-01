<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/signup.css">
    <title>Peminjaman Aula | register form</title>
</head>
<body>
    <div class="bg">
    <div class="form">
        <img src="img/hall.png" class="image" >
        <h2>SIGN UP</h2>
        <form action="{{ route('register') }}" method="POST" class="input-group">
        @csrf 
            <div>
                <input class="input @error('full_name') is-error @enderror"  name="full_name" id="full_name" type="text" placeholder="Nama Lengkap">
                @error('full_name')
                    <label for="">{{ $message }}</label>
                @enderror
            </div>
            <div>
                <input class="input @error('username') is-error @enderror"  name="username" id="username" type="text" placeholder="Username">
                @error('username')
                    <label for="">{{ $message }}</label>
                @enderror
            </div>

            <div>
                <input class="input @error('no_telepon') is-error @enderror"  name="no_telepon" id="no_telepon" type="text" placeholder="No. Telepon">
                @error('no_telepon')
                    <label for="">{{ $message }}</label>
                @enderror
            </div>

            <div>
                <input class="input @error('email') is-error @enderror" name="email" id="email" type="email" placeholder="Email">
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
            <input class="input @error('password_confirmation') is-error @enderror" name="password_confirmation" type="password" placeholder="Confirm Password">
            @error('password_confirmation')
                <label for="">{{ $message }}</label>
            @enderror
            </div>

            <div>
            <input class="submit" type="submit" value="SIGN UP">
            </div>
            <small class="acc" >Already have an account ? <a href="{{ route('login') }}">Sign in</a></small>
        </form>
    </div>
</div>
</body>
</html>