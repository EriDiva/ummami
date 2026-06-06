<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Menu;

class AdminController extends Controller
{
    public function dashboard()
    {
        $totalOrders = Order::count();

        $pendingOrders = Order::where(
            'status',
            'pending'
        )->count();

        $processingOrders = Order::where(
            'status',
            'diproses'
        )->count();

        $completedOrders = Order::where(
            'status',
            'selesai'
        )->count();

        $totalRevenue = Order::where(
            'status',
            'selesai'
        )->sum('total');

        $todayRevenue = Order::whereDate(
            'created_at',
            today()
        )
        ->where(
            'status',
            'selesai'
        )
        ->sum('total');

        $bestMenu = Menu::orderBy(
            'terjual',
            'desc'
        )->first();

        $latestOrders = Order::latest()
            ->take(5)
            ->get();

        return view(
            'admin.dashboard',
            compact(
                'totalOrders',
                'pendingOrders',
                'processingOrders',
                'completedOrders',
                'totalRevenue',
                'todayRevenue',
                'latestOrders',
                'bestMenu'
            )
        );
    }
}