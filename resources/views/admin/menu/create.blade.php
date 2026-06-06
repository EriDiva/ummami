@extends('layouts.admin')

@section('content')

<div class="dashboard-main">

    <div class="topbar">

        <div>

            <h1>Tambah Menu</h1>

            <p>
                Tambahkan menu baru ke UMMAMI
            </p>

        </div>

    </div>

    <div class="form-card">

        <form
            action="/admin/menu/store"
            method="POST"
            enctype="multipart/form-data">

            @csrf

            <div class="form-group">

                <label>Nama Menu</label>

                <input
                    type="text"
                    name="nama"
                    placeholder="Contoh: Nasi Ayam"
                    required>

            </div>

            <div class="form-group">

                <label>Harga</label>

                <input
                    type="number"
                    name="harga"
                    placeholder="Contoh: 13000"
                    required>

            </div>

            <div class="form-group">

                <label>Gambar</label>

                <input
                    type="file"
                    name="gambar"
                    required>

            </div>

            <div class="form-group">

                <label>Rating</label>

                <input
                    type="text"
                    name="rating"
                    value="4.5">

            </div>

            <div class="form-group">

                <label>Kategori</label>

                <select name="kategori">

                    <option value="Makanan">
                        Makanan
                    </option>

                    <option value="Minuman">
                        Minuman
                    </option>

                    <option value="Cemilan">
                        Cemilan
                    </option>

                </select>

            </div>

            <button
                type="submit"
                class="btn-save">

                Simpan Menu

            </button>

        </form>

    </div>

</div>

@endsection