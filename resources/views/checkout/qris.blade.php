@extends('layouts.customer')

@section('content')

<div class="container">

    <div class="checkout-card">

        <h1>Pembayaran QRIS</h1>

        <p class="checkout-subtitle">
            Scan QRIS berikut lalu upload bukti pembayaran
        </p>

        <div class="qris-box">

            <img
                src="{{ asset('images/qris.jpeg') }}"
                alt="QRIS"
                class="qris-image">

        </div>

        <form
            action="/checkout/store"
            method="POST"
            enctype="multipart/form-data">

            @csrf

            <input
                type="hidden"
                name="nama_pelanggan"
                value="{{ $nama_pelanggan }}">

            <input
                type="hidden"
                name="nomor_meja"
                value="{{ $nomor_meja }}">

            <input
                type="hidden"
                name="payment"
                value="qris">

            <div class="form-group">

                <label>
                    Upload Bukti Transfer
                </label>

                <input
                    type="file"
                    name="bukti_transfer"
                    accept="image/*"
                    required>

            </div>

            <button
                type="submit"
                class="btn-order">

                Kirim Bukti Pembayaran

            </button>

        </form>

    </div>

</div>

@endsection