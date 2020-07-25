<html>
    <head>

    <title>{{config('app.name', 'Election Commission')}}</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <script type='text/javascript' src="{{asset('js/jquery-3.5.1.min.js')}}"></script>
    </head>

    <body>
        @include('layouts.navbar')

        <div class="container">

            @yield('content')

            @include('layouts.footer')
        </div>
    </body>
</html>