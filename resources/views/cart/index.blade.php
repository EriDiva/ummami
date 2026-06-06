@extends('layouts.customer')

@section('content')

<div class="cart-page">

    <h1 class="cart-title">
        Keranjang
    </h1>

    @php
        $total = 0;
    @endphp

    @foreach($cart as $id => $item)

        @php
            $subtotal = $item['harga'] * $item['qty'];
            $total += $subtotal;
        @endphp

        <div class="cart-card">

            <div class="cart-info">

                <h3>
                    {{ $item['nama'] }}
                </h3>

                <p>
                    Qty : {{ $item['qty'] }}
                </p>

            </div>

            <div class="cart-price">

                <h3>
                    Rp {{ number_format($subtotal,0,',','.') }}
                </h3>

                <a
                    href="/cart/remove/{{ $id }}"
                    class="cart-remove">

                    Hapus

                </a>

            </div>

        </div>

    @endforeach

    <div class="cart-footer">

        <div class="cart-total">

            Total :
            Rp {{ number_format($total,0,',','.') }}

        </div>

        <a
            href="/checkout"
            class="checkout-btn">

            Checkout

        </a>

    </div>

</div>

@endsection