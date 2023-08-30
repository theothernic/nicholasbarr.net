<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') -- {{ config('app.name') }}</title>

    @vite(['resources/scss/site.scss'])
</head>

<body>
    <header id="masthead">
        <h1 class="page-title">@yield('journal.title')</h1>
        <div class="nameplate"><a href="{{ URL::to('/') }}">Nicholas Barr</a></div>
    </header>
    <section class="spacer">&nbsp;</section>

    <main {{ isset($page->mainClass) ? sprintf('class="%s"', $page->mainClass) : null}}>
        @yield('content')
    </main>
</body>
</html>
