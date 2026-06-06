<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function authenticate(Request $request)
    {
        $admin = Admin::where(
            'email',
            $request->email
        )->first();

        if (!$admin)
        {
            return back()
                ->with('error','Email tidak ditemukan');
        }

        if ($admin->password != $request->password)
        {
            return back()
                ->with('error','Password salah');
        }

        session([
            'admin_id' => $admin->id,
            'admin_nama' => $admin->nama
        ]);

        return redirect('/admin/dashboard');
    }

    public function logout()
    {
        session()->flush();

        return redirect('/admin/login');
    }
}