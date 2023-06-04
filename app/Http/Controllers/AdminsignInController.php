<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminsignInController extends Controller
{
    public function adminsignIn(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'parola' => 'required',
        ]);

        $email = $request->input('email');
        $parola = $request->input('parola');

        $user = DB::table('adminler')->where('email', $email)->first();

        if ($user) {
            if (Hash::check($parola, $user->parola)) {
                // Kullanıcı giriş başarılı, oturumu başlat
                session()->put('email', $user->email);
                session()->put('admin_adi', $user->admin_adi);

                return redirect()->route('library');
            } else {
                return back()->withErrors(['parola' => 'Parola yanlış']);
            }
        } else {
            return back()->withErrors(['email' => 'Email yanlış']);
        }
    }
}
