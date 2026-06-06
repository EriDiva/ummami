@extends('layouts.app')

@section('content')

<div class="about-page">

    <!-- HERO -->
    <section class="about-hero">

        <!-- LEFT -->
        <div class="about-left">

            <p class="about-label">
                TENTANG KAMI
            </p>

            <h1>
                Warung Sederhana,
                <span>Rasa Luar Biasa</span>
            </h1>

            <p class="about-desc">
                UMMAMI hadir sebagai warung makan sederhana yang
                menyajikan berbagai menu rumahan dengan harga
                terjangkau. Kami berkomitmen memberikan makanan
                yang lezat, porsi yang pas, dan pelayanan yang
                ramah untuk setiap pelanggan.
            </p>

            <p class="about-desc">
                Dibangun sejak 2025, UMMAMI terus berusaha menjadi
                tempat makan yang nyaman untuk mahasiswa, pekerja,
                maupun keluarga. Dengan menu yang beragam dan
                suasana yang hangat, kami siap menemani waktu makan
                Anda setiap hari.
            </p>

        </div>

        <!-- RIGHT -->
        <div class="about-right">

            <img
                src="{{ asset('images/warung.jpeg') }}"
                alt="About UMAMI"
            >

            <div class="about-badge">
                🌿 berdiri sejak 2025 <br>
                Malang, Jawa Timur
            </div>

        </div>

    </section>

    <!-- INFO -->
    <section class="about-info">

        <!-- CARD -->
        <div class="info-card">

            <div class="info-icon">📍</div>

            <h3>Lokasi</h3>

            <p>
                Jalan Golf No.78, Tasikmadu,
                Lowokwaru, Kota Malang, Jawa Timur.
            </p>

            <span>Dekat Kampus 2 ITN Malang</span>

        </div>

        <!-- CARD -->
        <div class="info-card">

            <div class="info-icon">📞</div>

            <h3>Kontak</h3>

            <p>

                <a
                    href="https://wa.me/6281286917769"
                    target="_blank"
                    class="wa-link">

                    <i class="fab fa-whatsapp"></i>

                    +62 812-8691-7769 (Bu Aminah)

                </a>

            </p>

            <span>
                WhatsApp & Telepon
                (08.00–20.00 WIB)
            </span>

        </div>

        <!-- CARD -->
        <div class="info-card">

            <div class="info-icon">🕒</div>

            <h3>Jam Operasional</h3>

            <p>
                Senin–Minggu:
                08.00–21.00 WIB
            </p>

            <span>
                Minggu: 09.00–21.00 WIB
            </span>

        </div>

    </section>

</div>

@endsection