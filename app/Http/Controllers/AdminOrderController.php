<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class AdminOrderController extends Controller
{
    public function index(Request $request)
    {
        $query = Order::query();

        if($request->search)
        {
            $query->where('kode_order', 'like', '%' . $request->search . '%')
                  ->orWhere('nama_pelanggan', 'like', '%' . $request->search . '%')
                  ->orWhere('nomor_meja', 'like', '%' . $request->search . '%');
        }

        $orders = $query
            ->latest()
            ->get();

        return view(
            'admin.orders.index',
            compact('orders')
        );
    }

    public function show($id)
    {
        $order = Order::with(
            'items.menu'
        )->findOrFail($id);

        return view(
            'admin.orders.show',
            compact('order')
        );
    }

    public function process($id)
    {
        $order = Order::findOrFail($id);

        $order->update([
            'status' => 'diproses'
        ]);

        return redirect('/admin/orders');
    }

    public function finish($id)
    {
        $order = Order::with('items.menu')
            ->findOrFail($id);

        foreach($order->items as $item)
        {
            $menu = $item->menu;

            $menu->increment(
                'terjual',
                $item->qty
            );
        }

        $order->update([
            'status' => 'selesai'
        ]);

        return redirect('/admin/orders');
    }

    public function verify($id)
    {
        $order = Order::findOrFail($id);

        $order->status = 'pending';

        $order->save();

        return redirect('/admin/orders/show/'.$id);
    }
}