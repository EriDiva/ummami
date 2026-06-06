@extends('layouts.admin')

@section('content')

<div class="dashboard-main">

    <div class="topbar">

        <div>

            <h1>Pesanan Masuk</h1>

            <p>
                Kelola seluruh pesanan pelanggan
            </p>

        </div>

        <form
            class="topbar-right"
            method="GET"
            action="/admin/orders">

            <input
                type="text"
                name="search"
                value="{{ request('search') }}"
                placeholder="Cari kode order, pelanggan, atau meja...">

        </form>

    </div>

    <div class="table-container">

        <table>

            <thead>

                <tr>

                    <th>Kode</th>
                    <th>Pelanggan</th>
                    <th>Meja</th>
                    <th>Total</th>
                    <th>Status</th>
                    <th>Aksi</th>

                </tr>

            </thead>

            <tbody>

                @forelse($orders as $order)

                <tr>

                    <td>
                        {{ $order->kode_order }}
                    </td>

                    <td>
                        {{ $order->nama_pelanggan }}
                    </td>

                    <td>
                        {{ $order->nomor_meja }}
                    </td>

                    <td>
                        Rp {{ number_format($order->total,0,',','.') }}
                    </td>

                    <td>

                        <span
                            class="status {{ $order->status }}">

                            {{ strtoupper($order->status) }}

                        </span>

                    </td>

                    <td>

                        <a
                            href="/admin/orders/show/{{ $order->id }}"
                            class="btn-detail">

                            Detail

                        </a>

                        @if($order->status == 'pending')

                            <a
                                href="/admin/orders/process/{{ $order->id }}"
                                class="btn-process">

                                Proses

                            </a>

                        @endif

                        @if($order->status == 'diproses')

                            <a
                                href="/admin/orders/finish/{{ $order->id }}"
                                class="btn-finish">

                                Selesai

                            </a>

                        @endif

                    </td>

                </tr>

                @empty

                <tr>

                    <td colspan="6">

                        Belum ada pesanan

                    </td>

                </tr>

                @endforelse

            </tbody>

        </table>

    </div>

</div>

@endsection