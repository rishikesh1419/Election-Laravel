<html>
    <head>

    <title>{{config('app.name', 'Election Commission')}}</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    </head>

    <body>
        @include('layouts.navbar')

        <div class="container">

            @yield('content')

            @include('layouts.footer')
        </div>
    </body>
</html>