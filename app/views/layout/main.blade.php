<!DOCTYPE html>
<html>
    <head>
        <title>Advertiser Account Management</title>
    </head>
    <body>
        @if(Session::has('global'))
            <p>{{ Session::get('global') }}</p>
        @endif

        @include('layout.navigation')
        @yield('content')
    </body>
</html>