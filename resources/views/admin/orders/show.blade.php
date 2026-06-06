@extends('layouts.admin')

@section('content')

<div class="dashboard-main">

    <div class="topbar">

        <div>

            <h1>Detail Pesanan</h1>

            <p>

                {{ $order->kode_order }}

            </p>

        </div>

        <a
            href="/admin/orders"
            class="btn-detail">

            Kembali

        </a>

    </div>

    <!-- INFO ORDER -->
    <div class="cards">

        <div class="card">

            <h4>Pelanggan</h4>

            <h2>

                {{ $order->nama_pelanggan }}

            </h2>

        </div>

        <div class="card">

            <h4>Nomor Meja</h4>

            <h2>

                {{ $order->nomor_meja }}

            </h2>

        </div>

        <div class="card">

            <h4>Status</h4>

            <h2>

                <span
                    class="status {{ $order->status }}">

                    {{ strtoupper($order->status) }}

                </span>

            </h2>

        </div>

    </div>

    <!-- MENU -->
    <div class="table-container">

        <div class="table-header">

            <h2>

                Daftar Menu

            </h2>

        </div>

        <table>

            <thead>

                <tr>

                    <th>Menu</th>
                    <th>Qty</th>
                    <th>Subtotal</th>

                </tr>

            </thead>

            <tbody>

                @foreach($order->items as $item)

                <tr>

                    <td>

                        {{ $item->menu->nama }}

                    </td>

                    <td>

                        {{ $item->qty }}

                    </td>

                    <td>

                        Rp {{ number_format($item->subtotal,0,',','.') }}

                    </td>

                </tr>

                @endforeach

            </tbody>

        </table>

    </div>

    @if($order->bukti_transfer)

        <div class="form-card">

            <h3>
                Bukti Pembayaran QRIS
            </h3>

            <br>

            <img
                src="{{ asset('storage/'.$order->bukti_transfer) }}"
                style="
                    max-width:350px;
                    border-radius:12px;
                ">

        </div>

    @endif

    <!-- TOTAL -->
    <div class="order-total-card">

        <h3>

            Total Pesanan

        </h3>

        <h1>

            Rp {{ number_format($order->total,0,',','.') }}

        </h1>

    </div>

    <!-- ACTION -->
    <div class="order-action">
        @if($order->status == 'menunggu_pembayaran')

        <a
            href="/admin/orders/verify/{{ $order->id }}"
            class="btn-verify">

            ✓ Verifikasi Pembayaran

        </a>

        @endif

        @if($order->status == 'pending')

            <a
                href="/admin/orders/process/{{ $order->id }}"
                class="btn-process">

                Proses Pesanan

            </a>

        @endif

        @if($order->status == 'diproses')

            <a
                href="/admin/orders/finish/{{ $order->id }}"
                class="btn-finish">

                Selesaikan Pesanan

            </a>

        @endif

        @if($order->status == 'selesai')

            <div class="success-box">

                ✓ Pesanan Sudah Selesai

            </div>

        @endif

    </div>

</div>

@endsection