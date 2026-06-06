@extends('layouts.app')

@section('content')

<!-- HERO -->
<section class="hero">

    <div class="hero-left">

        <div class="tag">
            WARUNG MODERN CITA RASA NUSANTARA
        </div>

        <h1>
            Nasi & <br>
            Sambal <br>
            Sepuasnya
        </h1>

        <p>
            Warung makan modern dengan cita rasa nusantara
            yang otentik. Makan sepuasnya, harga bersahabat,
            hati bahagia.
        </p>

        <div class="hero-button">

            <a href="{{ url('/menu') }}" class="btn-order">
                Pesan Sekarang
            </a>

        </div>

    </div>

    <div class="hero-right">
        <img src="{{ asset('images/nasi.png') }}" alt="">
    </div>

</section>

@endsection