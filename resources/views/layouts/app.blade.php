<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @livewireStyles
    </head>
    <body>

        <div class="header">
            <h2>Blog Name</h2>
        </div>

        <div class="container">
            @yield('content')
        </div>

        <div class="footer">
            <h2>Footer</h2>
        </div>

        @livewireScripts

    </body>
</html>
