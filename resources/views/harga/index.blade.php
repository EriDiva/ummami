@extends('layouts.app')

@section('content')

<div class="harga-page">

    <!-- HEADER -->
    <div class="harga-header">

        <p class="harga-label">
            DAFTAR HARGA
        </p>

        <h1>Harga Menu</h1>

        <p>
            Harga bersahabat, rasa tidak mengecewakan.
            Makan kenyang tanpa khawatir kantong bocor.
        </p>

    </div>

    <!-- CARD WRAPPER -->
    <div class="harga-wrapper">

        <!-- MAKANAN -->
        <div class="harga-card">

            <div class="harga-top">
                <div class="icon">🍚</div>

                <h2>Makanan</h2>

                <span>Rp 3.000 - Rp 15.000</span>
            </div>

            <div class="harga-list">

                <div class="harga-item">
                    <p>✓ Nasi Lalapan Mujaer</p>
                    <h4>Rp 15.000</h4>
                </div>

                <div class="harga-item">
                    <p>✓ Nasi Lalapan Udang</p>
                    <h4>Rp 13.000</h4>
                </div>

                <div class="harga-item">
                    <p>✓ Nasi Lalapan Kornet Telur Gimbal</p>
                    <h4>Rp 13.000</h4>
                </div>

                <div class="harga-item">
                    <p>✓ Nasi Lalapan Ayam</p>
                    <h4>Rp 13.000</h4>
                </div>

                <div class="harga-item">
                    <p>✓ Nasi Lalapan Usus Telur Gimbal</p>
                    <h4>Rp 12.000</h4>
                </div>

                <div class="harga-item">
                    <p>✓ Nasi Tongkol Suwir</p>
                    <h4>Rp 12.000</h4>
                </div>

                <div class="harga-item">
                    <p>✓ Nasi Lalapan Ati Ampela</p>
                    <h4>Rp 12.000</h4>
                </div>

                <div class="harga-item">
                    <p>✓ Nasi Lalapan Lele</p>
                    <h4>Rp 12.000</h4>
                </div>

                <div class="harga-item">
                    <p>✓ Nasi Sayap</p>
                    <h4>Rp 12.000</h4>
                </div>

                <div class="harga-item">
                    <p>✓ Nasi Lalapan Usus Goreng</p>
                    <h4>Rp 10.000</h4>
                </div>

                <div class="harga-item">
                    <p>✓ Nasi Lalapan Telur/Tempe/Tahu</p>
                    <h4>Rp 10.000</h4>
                </div>

                <div class="harga-item">
                    <p>✓ Nasi Putih</p>
                    <h4>Rp 5.000</h4>
                </div>

                <div class="harga-item">
                    <p>✓ Indomie</p>
                    <h4>Rp 6.000</h4>
                </div>

                <div class="harga-item">
                    <p>✓ Indomie + Telur</p>
                    <h4>Rp 9.000</h4>
                </div>

                <div class="harga-item">
                    <p>✓ Kol Goreng</p>
                    <h4>Rp 3.000</h4>
                </div>

            </div>

            <a href="/menu?kategori=Makanan" class="btn-price">
                Pesan Makanan
            </a>

        </div>

        <!-- CEMILAN -->
        <div class="harga-card">

            <div class="harga-top">
                <div class="icon">🍟</div>

                <h2>Cemilan</h2>

                <span>Rp 7.000 - 10.000</span>
            </div>

            <div class="harga-list">

                <div class="harga-item">
                    <p>✓ Kentang Goreng</p>
                    <h4>Rp 10.000</h4>
                </div>

                <div class="harga-item">
                    <p>✓ Tahu Bakso</p>
                    <h4>Rp 7.000</h4>
                </div>

            </div>

            <a href="/menu?kategori=Cemilan" class="btn-price">
                Pesan Cemilan
            </a>

        </div>

        <!-- MINUMAN -->
        <div class="harga-card">

            <div class="harga-top">
                <div class="icon">🥤</div>

                <h2>Minuman</h2>

                <span>Rp 2.000 - Rp 7.000</span>
            </div>

            <div class="harga-list">

                <div class="harga-item">
                    <p>✓ Joshua</p>
                    <h4>Rp 7.000</h4>
                </div>

                <div class="harga-item">
                    <p>✓ Es Kopi Susu</p>
                    <h4>Rp 5.000</h4>
                </div>

                <div class="harga-item">
                    <p>✓ Extrajos</p>
                    <h4>Rp 5.000</h4>
                </div>

                <div class="harga-item">
                    <p>✓ Pop Ice</p>
                    <h4>Rp 5.000</h4>
                </div>

                <div class="harga-item">
                    <p>✓ Es Milo</p>
                    <h4>Rp 5.000</h4>
                </div>

                <div class="harga-item">
                    <p>✓ Es Jeruk</p>
                    <h4>Rp 4.000</h4>
                </div>

                <div class="harga-item">
                    <p>✓ Es Teh</p>
                    <h4>Rp 3.000</h4>
                </div>

                <div class="harga-item">
                    <p>✓ Air Es</p>
                    <h4>Rp 2.000</h4>
                </div>

                <div class="harga-item">
                    <p>✓ Kopi Hitam</p>
                    <h4>Rp 3.000</h4>
                </div>

            </div>

            <a href="/menu?kategori=Minuman" class="btn-price">
                Pesan Minuman
            </a>

        </div>

    </div>

    <!-- FOOTER INFO -->
    <div class="harga-info">
        🌿 Harga sudah termasuk nasi, sambal & lalapan sepuasnya!
    </div>

</div>

@endsection