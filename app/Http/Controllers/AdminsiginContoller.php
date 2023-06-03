<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminsiginContoller extends Controller
{
    public function signIn(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'parola' => 'required',
        ]);

        $email = $request->input('email');
        $parola = $request->input('parola');

        $user = DB::table('kullanicilar')->where('email', $email)->first();

        if ($user) {
            if (Hash::check($parola, $user->parola)) {
                // Kullanıcı giriş başarılı, oturumu başlat
                session()->put('email', $user->email);
                session()->put('kullanici_adi', $user->kullanici_adi);

                return redirect()->route('library');
            } else {
                return back()->withErrors(['parola' => 'Parola yanlış']);
            }
        } else {
            return back()->withErrors(['email' => 'Email yanlış']);
        }
    }
}


