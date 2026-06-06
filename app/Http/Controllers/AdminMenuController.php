<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;

class AdminMenuController extends Controller
{
    public function index()
    {
        $menus = Menu::all();

        return view('admin.menu.index', compact('menus'));
    }

    public function create()
    {
        return view('admin.menu.create');
    }

    public function store(Request $request)
    {
        $gambar = null;

        if ($request->hasFile('gambar'))
        {
            $gambar = time() . '.' .
                $request->file('gambar')->extension();

            $request->file('gambar')->move(
                public_path('uploads'),
                $gambar
            );
        }

        Menu::create([
            'nama'      => $request->nama,
            'harga'     => $request->harga,
            'gambar'    => $gambar,
            'rating'    => $request->rating,
            'terjual'   => 0,
            'kategori'  => $request->kategori
        ]);

        return redirect('/admin/menu')
            ->with('success', 'Menu berhasil ditambahkan');
    }

    public function edit($id)
    {
        $menu = Menu::findOrFail($id);

        return view(
            'admin.menu.edit',
            compact('menu')
        );
    }

    public function update(Request $request, $id)
    {
        $menu = Menu::findOrFail($id);

        $gambar = $menu->gambar;

        if ($request->hasFile('gambar'))
        {
            $gambar = time() . '.' .
                $request->file('gambar')->extension();

            $request->file('gambar')->move(
                public_path('uploads'),
                $gambar
            );
        }

        $menu->update([
            'nama'      => $request->nama,
            'harga'     => $request->harga,
            'gambar'    => $gambar,
            'rating'    => $request->rating,
            'kategori'  => $request->kategori
        ]);

        return redirect('/admin/menu')
            ->with('success', 'Menu berhasil diperbarui');
    }

    public function destroy($id)
    {
        Menu::destroy($id);

        return redirect('/admin/menu')
            ->with('success', 'Menu berhasil dihapus');
    }
}