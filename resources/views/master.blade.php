<!DOCTYPE html>
<html>
<head>
    <title>@yield('title', 'Laravel App')</title>
    <link rel="stylesheet" href="{{ asset('css/master.css') }}">
</head>
<body>
    <header>
        <nav>
            <!-- Navigation bar content -->
        </nav>
    </header>
    
    <div class="container">
        @yield('content')
    </div>

    <footer>
        <!-- Footer content -->
    </footer>
</body>
</html>

