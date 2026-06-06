@extends('layouts.admin')

@section('content')

<div class="dashboard-main">

    <div class="topbar">

        <div>

            <h1>Kelola Menu</h1>

            <p>
                Kelola semua menu UMMAMI
            </p>

        </div>

        <a
            href="/admin/menu/create"
            class="btn-add">

            + Tambah Menu

        </a>

    </div>

    <div class="table-container">

        <table>

            <thead>

                <tr>

                    <th>Foto</th>
                    <th>Nama</th>
                    <th>Kategori</th>
                    <th>Harga</th>
                    <th>Terjual</th>
                    <th>Aksi</th>

                </tr>

            </thead>

            <tbody>

                @foreach($menus as $menu)

                <tr>

                    <td>

                        <img
                            src="{{ asset('uploads/'.$menu->gambar) }}"
                            width="70"
                            style="
                                border-radius:10px;
                                object-fit:cover;
                            ">

                    </td>

                    <td>
                        {{ $menu->nama }}
                    </td>

                    <td>
                        {{ $menu->kategori }}
                    </td>

                    <td>
                        Rp {{ number_format($menu->harga,0,',','.') }}
                    </td>

                    <td>
                        {{ $menu->terjual }}
                    </td>

                    <td>

                        <a
                            href="/admin/menu/edit/{{ $menu->id }}"
                            class="btn-edit">

                            Edit

                        </a>

                        <a
                            href="/admin/menu/delete/{{ $menu->id }}"
                            class="btn-delete">

                            Hapus

                        </a>

                    </td>

                </tr>

                @endforeach

            </tbody>

        </table>

    </div>

</div>

@endsection