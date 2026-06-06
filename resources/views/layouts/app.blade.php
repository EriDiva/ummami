<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0">

    <title>UMMAMI</title>

    <!-- FONT AWESOME -->
    <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <link
        rel="stylesheet"
        href="{{ asset('css/style.css') }}">

</head>

<body>

    <!-- NAVBAR -->
    <nav class="navbar">

        <!-- LOGO -->
        <div class="logo">

            <a href="/">
                UMMAMI
            </a>

        </div>

        <!-- MENU -->
        <ul class="navbar-menu">

            <li>

                <a
                    href="/"
                    class="{{ request()->is('/') ? 'active-nav' : '' }}">

                    Home

                </a>

            </li>

            <li>

                <a
                    href="/menu"
                    class="{{ request()->is('menu') ? 'active-nav' : '' }}">

                    Menu

                </a>

            </li>

            <li>

                <a
                    href="/harga"
                    class="{{ request()->is('harga') ? 'active-nav' : '' }}">

                    Harga

                </a>

            </li>

            <li>

                <a
                    href="/about"
                    class="{{ request()->is('about') ? 'active-nav' : '' }}">

                    About Us

                </a>

            </li>

        </ul>

        <!-- BUTTON -->
        <div class="navbar-buttons">

            <a
                href="/admin/dashboard"
                class="admin-btn">

                <i class="fas fa-user-shield"></i>
                Admin

            </a>

        </div>

    </nav>

    <!-- CONTENT -->
    @yield('content')

</body>
</html>