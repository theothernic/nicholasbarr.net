<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nicholas Barr, a gent currently hailing from Murfreesboro, TN.</title>

    @vite(['resources/scss/site.scss'])
</head>
<body>
<main class="centerstage">
    <div class="stage">
        @yield('content')
    </div>
</main>
</body>
</html>
