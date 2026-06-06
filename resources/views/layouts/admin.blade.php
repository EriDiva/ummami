<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0">

    <title>UMMAMI Admin</title>

    <!-- FONT AWESOME -->
    <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <link
        rel="stylesheet"
        href="{{ asset('css/style.css') }}">

</head>

<body>

<div class="admin-layout">

    <!-- SIDEBAR -->
    <aside class="admin-sidebar">

        <div class="sidebar-logo">

            <h2>UMMAMI</h2>

        </div>

        <nav class="sidebar-menu">

            <a
                href="/admin/dashboard"
                class="{{ request()->is('admin/dashboard') ? 'active' : '' }}">

                <i class="fas fa-chart-pie"></i>
                Dashboard

            </a>

            <a
                href="/admin/orders"
                class="{{ request()->is('admin/orders*') ? 'active' : '' }}">

                <i class="fas fa-receipt"></i>
                Orders

            </a>

            <a
                href="/admin/menu"
                class="{{ request()->is('admin/menu*') ? 'active' : '' }}">

                <i class="fas fa-utensils"></i>
                Menu

            </a>

            <a
                href="/admin/reports"
                class="{{ request()->is('admin/reports*') ? 'active' : '' }}">

                <i class="fas fa-chart-line"></i>
                Laporan

            </a>

            <a href="/admin/logout">

                <i class="fas fa-sign-out-alt"></i>
                Logout

            </a>

        </nav>

        <div class="sidebar-footer">

            <strong>
                Admin UMMAMI
            </strong>

            <span>
                admin@ummami.id
            </span>

        </div>

    </aside>

    <!-- CONTENT -->
    <main class="admin-content">

        @yield('content')

    </main>

</div>

</body>
</html>