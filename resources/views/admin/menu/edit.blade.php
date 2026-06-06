@extends('layouts.admin')

@section('content')

<div class="container">

    <h1>Edit Menu</h1>

    <form
        action="/admin/menu/update/{{ $menu->id }}"
        method="POST"
        enctype="multipart/form-data">

        @csrf

        <div class="form-group">

            <label>Nama Menu</label>

            <input
                type="text"
                name="nama"
                value="{{ $menu->nama }}"
                required>

        </div>

        <br>

        <div class="form-group">

            <label>Harga</label>

            <input
                type="number"
                name="harga"
                value="{{ $menu->harga }}"
                required>

        </div>

        <br>

        <div class="form-group">

            <label>Gambar Saat Ini</label>

            <br>

            <img
                src="{{ asset('uploads/' . $menu->gambar) }}"
                width="150">

        </div>

        <br>

        <div class="form-group">

            <label>Ganti Gambar</label>

            <input
                type="file"
                name="gambar">

        </div>

        <br>

        <div class="form-group">

            <label>Rating</label>

            <input
                type="number"
                step="0.1"
                name="rating"
                value="{{ $menu->rating }}">

        </div>

        <br>

        <div class="form-group">

            <label>Kategori</label>

            <select name="kategori">

                <option value="Makanan"
                    {{ $menu->kategori == 'Makanan' ? 'selected' : '' }}>
                    Makanan
                </option>

                <option value="Minuman"
                    {{ $menu->kategori == 'Minuman' ? 'selected' : '' }}>
                    Minuman
                </option>

                <option value="Cemilan"
                    {{ $menu->kategori == 'Cemilan' ? 'selected' : '' }}>
                    Cemilan
                </option>

            </select>

        </div>

        <br>

        <button
            type="submit"
            class="btn-update">

            Update Menu

        </button>

    </form>

</div>

@endsection