<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>DC Comics @yield('metaTitle')</title>
</head>

<body>

    <header>
        <div class="container">
            <nav>
                <ul>
                    <li><a href="/">Home</a></li>
                    <li><a href="{{ route('comics.index') }}">Index</a></li>
                    <li><a href="{{ route('comics.create') }}">Nuovo articolo</a></li>
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
            <h5>Footer</h5>
        </div>
    </footer>

</body>

</html>
