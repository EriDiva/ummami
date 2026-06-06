<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\OrderItem;

class CheckoutController extends Controller
{
    public function index()
    {
        return view('checkout.index');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_pelanggan' => 'required',
            'nomor_meja' => 'required'
        ]);

        $cart = session()->get('cart', []);

        if(empty($cart))
        {
            return redirect('/cart');
        }

        $total = 0;

        foreach($cart as $item)
        {
            $total += $item['harga'] * $item['qty'];
        }

        $buktiTransfer = null;

        if($request->hasFile('bukti_transfer'))
        {
            $buktiTransfer = $request
                ->file('bukti_transfer')
                ->store('bukti-transfer', 'public');
        }

        $order = Order::create([

            'kode_order' => 'ORD-' . time(),

            'nama_pelanggan' => $request->nama_pelanggan,

            'nomor_meja' => $request->nomor_meja,

            'total' => $total,

            'payment_method' => $request->payment,

            'bukti_transfer' => $buktiTransfer,

            'status' =>
                $request->payment == 'qris'
                ? 'menunggu_pembayaran'
                : 'pending'

        ]);

        foreach($cart as $id => $item)
        {
            OrderItem::create([

                'order_id' => $order->id,

                'menu_id' => $id,

                'qty' => $item['qty'],

                'subtotal' => $item['harga'] * $item['qty']

            ]);
        }

        session()->forget('cart');

        return redirect('/order-status?id=' . $order->id);
    }

    public function qris(Request $request)
    {
        return view(
            'checkout.qris',
            [
                'nama_pelanggan' =>
                    $request->nama_pelanggan,

                'nomor_meja' =>
                    $request->nomor_meja
            ]
        );
    }
}