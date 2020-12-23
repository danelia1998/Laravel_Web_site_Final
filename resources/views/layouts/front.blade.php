<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">
    <style>
        html,
        body {
            width: 100%;
            height: 100%;
        }

        body {
            background: linear-gradient(-45deg, #ee7752, #e73c7e, #23a6d5, #23d5ab);
            background-size: 400% 400%;
            animation: gradient 15s ease infinite;
        }

        @keyframes gradient {
            0% {
                background-position: 0% 50%;
            }

            50% {
                background-position: 100% 50%;
            }

            100% {
                background-position: 0% 50%;
            }
        }
    </style>
    <title>@yield('title', config('app.name'))</title>

    @include('partials.styles')

</head>

<body style="background-color:blue;">

    <header>
        @include('partials.menu')
    </header>

    <main role="main">

        {{-- @include('partials.header') --}}

        <div class="album py-5">
            <div class="container">
                @yield('content')
            </div>
        </div>

    </main>


    @include('partials.footer')

    @include('partials.scripts')
</body>

</html>