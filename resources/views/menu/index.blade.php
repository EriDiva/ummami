@extends('layouts.app')

@section('content')

<div class="menu-page">

    <!-- HEADER -->
    <div class="menu-header">

        <p class="menu-label">DAFTAR MENU</p>

        <h1>Menu Kami</h1>

        <p>
            Pilih dari berbagai menu nusantara
            yang lezat dan terjangkau
        </p>

    </div>

    <!-- SEARCH -->
    <div class="menu-top">

        <form method="GET" action="/menu">

            <input
                type="text"
                name="search"
                value="{{ request('search') }}"
                placeholder="Cari menu...">

        </form>

    <div class="category-buttons">

        <a
            href="/menu"
            class="category-btn">

            Semua

        </a>

        <a
            href="/menu?kategori=Makanan"
            class="category-btn">

            Makanan

        </a>

        <a
            href="/menu?kategori=Minuman"
            class="category-btn">

            Minuman

        </a>

        <a
            href="/menu?kategori=Cemilan"
            class="category-btn">

            Cemilan

        </a>

    </div>

    </div>

    <!-- CARD -->
    <div class="menu-grid">

        @foreach($menus as $menu)

        <div class="menu-card">

            <img
                src="{{ asset('uploads/' . $menu->gambar) }}"
                alt="{{ $menu->nama }}">

            <div class="menu-info">

                <div class="rating">
                    ⭐ {{ $menu->rating }}
                </div>

                <h3>{{ $menu->nama }}</h3>

                <p>{{ $menu->terjual }} terjual</p>

                <div class="menu-bottom">

                    <h2>
                        Rp {{ number_format($menu->harga,0,',','.') }}
                    </h2>

                    <form action="/cart/add/{{ $menu->id }}" method="POST">

                        @csrf

                        <button type="submit">
                            + Pesan
                        </button>

                    </form>

                </div>

            </div>

        </div>

        @endforeach

    </div>

</div>

@endsection