@extends('layouts.admin')

@section('content')

<div class="dashboard-main">

    <!-- MAIN -->

        <!-- TOPBAR -->
        <div class="topbar">

            <div>
                <h1>Dashboard</h1>
                <p>Selamat datang, Admin UMMAMI</p>
            </div>

        </div>

        <!-- CARDS -->
        <div class="cards">

            <div class="card">

                <h4>Total Orders</h4>

                <h2>{{ $totalOrders }}</h2>

                <p>Semua pesanan</p>

            </div>

            <div class="card">

                <h4>Pending</h4>

                <h2>{{ $pendingOrders }}</h2>

                <p>Menunggu diproses</p>

            </div>

            <div class="card">

                <h4>Diproses</h4>

                <h2>{{ $processingOrders }}</h2>

                <p>Sedang dimasak</p>

            </div>

            <div class="card">

                <h4>Selesai</h4>

                <h2>{{ $completedOrders }}</h2>

                <p>Pesanan selesai</p>

            </div>

            <div class="card">

                <h4>Total Pendapatan</h4>

                <h2>
                    Rp {{ number_format($totalRevenue,0,',','.') }}
                </h2>

                <p>Pesanan selesai</p>

            </div>

            <div class="card">

                <h4>Menu Terlaris</h4>

                <h2>

                    {{ $bestMenu->nama ?? '-' }}

                </h2>

                <p>

                    {{ $bestMenu->terjual ?? 0 }}
                    Terjual

                </p>

            </div>

            <div class="card">

                <h4>
                    Pendapatan Hari Ini
                </h4>

                <h2>
                    Rp {{ number_format($todayRevenue,0,',','.') }}
                </h2>

                <p>
                    Transaksi hari ini
                </p>

            </div>

        </div>

        

        <!-- TABLE -->
        <div class="table-container">

            <div class="table-header">

                <h2>
                    Pesanan Terbaru
                </h2>

            </div>

            <table>

                <thead>

                    <tr>

                        <th>Kode</th>

                        <th>Pelanggan</th>

                        <th>Meja</th>

                        <th>Total</th>

                        <th>Status</th>

                    </tr>

                </thead>

                <tbody>

                    @forelse($latestOrders as $order)

                    <tr>

                        <td>
                            {{ $order->kode_order }}
                        </td>

                        <td>
                            {{ $order->nama_pelanggan }}
                        </td>

                        <td>
                            {{ $order->nomor_meja }}
                        </td>

                        <td>
                            Rp {{ number_format($order->total,0,',','.') }}
                        </td>

                        <td>

                            <span class="status">

                                {{ strtoupper($order->status) }}

                            </span>

                        </td>

                    </tr>

                    @empty

                    <tr>

                        <td colspan="5">

                            Belum ada pesanan

                        </td>

                    </tr>

                    @endforelse

                </tbody>

            </table>

        </div>

</div>

@endsection