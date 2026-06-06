<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;

class MenuController extends Controller
{
    public function index(Request $request)
    {
        $query = Menu::query();

        if($request->search)
        {
            $query->where(
                'nama',
                'like',
                '%' . $request->search . '%'
            );
        }

        if(
            $request->kategori &&
            $request->kategori != 'Semua'
        )
        {
            $query->where(
                'kategori',
                $request->kategori
            );
        }

        $menus = $query->get();

        return view(
            'menu.index',
            compact('menus')
        );
    }
}