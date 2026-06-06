<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Menu;

class AdminReportController extends Controller
{
    public function index()
    {
        $totalOrders = Order::count();

        $totalRevenue = Order::where(
            'status',
            'selesai'
        )->sum('total');

        $bestMenu = Menu::orderBy(
            'terjual',
            'desc'
        )->first();

        return view(
            'admin.reports.index',
            compact(
                'totalOrders',
                'totalRevenue',
                'bestMenu'
            )
        );
    }
}