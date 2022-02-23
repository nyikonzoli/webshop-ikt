<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <title>@yield('title')</title>
    @yield('head')
</head>
<body>
    <div id="navbar">
        <h1>IKT Webshop</h1>
        <div id="authButtons">
            <button class="authButton"><b>Login</b></button>
            <button class="authButton"><b>Sign Up</b></button>
        </div>
    </div>
    <div id="content">
        @yield('content')
    </div>
    <div id="footer">

    </div>
</body>
</html>
