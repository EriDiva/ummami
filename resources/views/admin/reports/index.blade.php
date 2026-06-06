@extends('layouts.admin')

@section('content')

<div class="dashboard-main">

    <div class="topbar">

        <div>

            <h1>Laporan Penjualan</h1>

            <p>
                Ringkasan performa UMMAMI
            </p>

        </div>

    </div>

    <!-- STATISTIK -->
    <div class="cards">

        <div class="card">

            <h4>Total Pesanan</h4>

            <h2>
                {{ $totalOrders }}
            </h2>

            <p>
                Semua pesanan masuk
            </p>

        </div>

        <div class="card">

            <h4>Total Pendapatan</h4>

            <h2>
                Rp {{ number_format($totalRevenue,0,',','.') }}
            </h2>

            <p>
                Dari pesanan selesai
            </p>

        </div>

        <div class="card">

            <h4>Menu Terlaris</h4>

            <h2>
                {{ $bestMenu->nama ?? '-' }}
            </h2>

            <p>
                {{ $bestMenu->terjual ?? 0 }} Terjual
            </p>

        </div>

    </div>

    <!-- RINGKASAN -->
    <div class="table-container">

        <div class="table-header">

            <h2>
                Ringkasan Laporan
            </h2>

        </div>

        <table>

            <tbody>

                <tr>

                    <td>
                        Total Pesanan
                    </td>

                    <td>
                        {{ $totalOrders }}
                    </td>

                </tr>

                <tr>

                    <td>
                        Total Pendapatan
                    </td>

                    <td>

                        Rp {{ number_format($totalRevenue,0,',','.') }}

                    </td>

                </tr>

                <tr>

                    <td>
                        Menu Terlaris
                    </td>

                    <td>

                        {{ $bestMenu->nama ?? '-' }}

                    </td>

                </tr>

            </tbody>

        </table>

    </div>

</div>

@endsection