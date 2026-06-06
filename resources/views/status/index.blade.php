@extends('layouts.customer')

@section('content')

<div class="container">

    <div class="status-card">

        <h1>Status Pesanan</h1>

        <div class="order-info">

            <div>
                <span>Kode Pesanan</span>
                <strong>{{ $order->kode_order }}</strong>
            </div>

            <div>
                <span>Nama Pelanggan</span>
                <strong>{{ $order->nama_pelanggan }}</strong>
            </div>

            <div>
                <span>Nomor Meja</span>
                <strong>{{ $order->nomor_meja }}</strong>
            </div>

            <div>
                <span>Total</span>
                <strong>
                    Rp {{ number_format($order->total,0,',','.') }}
                </strong>
            </div>

        </div>

        <div class="progress-order">

            <div class="step completed">

                ✓

                <span>
                    Pesanan Dibuat
                </span>

            </div>

            <div class="step
                {{ $order->status == 'diproses' || $order->status == 'selesai' ? 'completed' : '' }}">

                🍳

                <span>
                    Diproses
                </span>

            </div>

            <div class="step
                {{ $order->status == 'selesai' ? 'completed' : '' }}">

                🎉

                <span>
                    Selesai
                </span>

            </div>

        </div>

        @if($order->status == 'menunggu_pembayaran')

            <div class="status-payment">

                📱 Menunggu Pembayaran QRIS

            </div>

        @endif

        @if($order->status == 'pending')

            <div class="status-pending">

                🟡 Menunggu Konfirmasi

            </div>

        @endif

        @if($order->status == 'diproses')

            <div class="status-process">

                🔵 Sedang Diproses Dapur

            </div>

        @endif

        @if($order->status == 'selesai')

            <div class="status-finish">

                🟢 Pesanan Siap Diambil

            </div>

        @endif

        <a href="/menu" class="back-menu">
            Kembali ke Menu
        </a>

    </div>

</div>

@endsection