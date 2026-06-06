<?php

namespace App\Http\Controllers;

use App\Models\Order;

class OrderStatusController extends Controller
{
    public function index()
    {
        $id = request('id');

        $order = Order::findOrFail($id);

        return view(
            'status.index',
            compact('order')
        );
    }
}