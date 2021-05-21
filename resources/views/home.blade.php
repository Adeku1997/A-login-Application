<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('vendor/css/home.css')}}">
    <title>Home</title>
</head>
<body>
<section class="dashboard">
    <div>
        @if (session('msg'))
            <h2>{{ session('msg') }}</h2>
        @endif
    </div>
    <div class="line">

    </div>
</section>
<form method="post" action="{{route('logout')}}">
    @csrf
    <button class="logout">Logout</button>
</form>
</body>
</html>


