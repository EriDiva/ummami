<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0">

    <title>UMMAMI</title>

    <link
        rel="stylesheet"
        href="{{ asset('css/style.css') }}">

</head>

<body>

    <nav class="navbar">

        <div class="logo">

            <a href="/">
                UMMAMI
            </a>

        </div>

        <ul class="navbar-menu">

            <li>

                <a href="/menu">
                    Menu
                </a>

            </li>

            <li>

                <a href="/cart">
                    Keranjang
                </a>

            </li>

        </ul>

    </nav>

    @yield('content')

</body>

</html>