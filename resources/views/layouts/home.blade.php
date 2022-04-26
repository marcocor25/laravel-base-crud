<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Comics</title>
</head>

<body>

    <header>
        <div class="container">
            <nav>
                <ul>
                    <li><a href="/">Home</a></li>
                    <li><a href="{{ route('comics.index') }}">Comics</a></li>
                    <li><a href="">Create</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main>
        <div class="container">
            @yield('mainContent')
        </div>
    </main>

    <footer>
        <div class="container">
            {{-- CONTENT --}}
        </div>
    </footer>

</body>

</html>
