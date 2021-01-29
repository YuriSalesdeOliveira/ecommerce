<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ecommerce</title>
    <link rel="stylesheet" href="{{ asset('site/assets/css/style.css') }}">
    @yield('links')
</head>
<body>
    <header class="main_header">

        <div class="main_header_logo">

            ecommerce

        </div>

    </header>

    <main class="main_content">

        @yield('content')

    </main>

    <footer class="main_footer">

    </footer>
    @yield('scripts')
</body>
</html>