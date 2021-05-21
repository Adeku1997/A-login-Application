<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('vendor/css/login.css')}}">
</head>
<body>
<main class="container">
    <form method="post" action="{{ route('login') }}">
        @csrf
        <h1>Login Page</h1>
        <div class="form-group">
            <label>E-mail</label>
            <input type="email" name="email" class="form-control">
            @if($errors->has('email'))
                <small>{{$errors->first('email')}}</small>
            @endif
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" class="form-control">
            @if($errors->has('password'))
                <small>{{$errors->first('password')}}</small>
            @endif
        </div>
        <div>
            <button type="submit" class="btn">Login</button>
        </div>
    </form>
</main>

</body>
</html>

