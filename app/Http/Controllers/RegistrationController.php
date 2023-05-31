<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class RegistrationController extends Controller
{
    public function register(Request $request)
    {
        $username_err = "";
        $email_err = "";
        $parola_err = "";
        $parolatkr_err = "";

        if ($request->isMethod('post')) {
            // Kullanıcı adı sorgulama
            if (empty($request->input("kullaniciadi"))) {
                $username_err = "Kullanıcı adı boş bırakılamaz.";
            } elseif (strlen($request->input("kullaniciadi")) < 5) {
                $username_err = "Kullanıcı adı en az 5 karakterden oluşmalıdır.";
            } elseif (!preg_match('/^[a-z\d_]{5,20}$/i', $request->input("kullaniciadi"))) {
                $username_err = "Kullanıcı adı büyük/küçük harf ve rakamlardan oluşmalıdır.";
            } else {
                $username = $request->input("kullaniciadi");
            }

            // E-posta doğrulama
            if (empty($request->input("email"))) {
                $email_err = "E-posta alanı boş bırakılamaz.";
            } elseif (!filter_var($request->input("email"), FILTER_VALIDATE_EMAIL)) {
                $email_err = "Geçersiz e-posta formatı.";
            } else {
                $email = $request->input("email");
            }

            // Parola doğrulama
            if (empty($request->input("parola"))) {
                $parola_err = "Parola boş bırakılamaz.";
            } else {
                $parola = Hash::make($request->input("parola"));
            }

            // Parola tekrar doğrulama
            if (empty($request->input("parolatkr"))) {
                $parolatkr_err = "Parola tekrar kısmı boş bırakılamaz.";
            } elseif ($request->input("parola") != $request->input("parolatkr")) {
                $parolatkr_err = "Parolalar eşleşmiyor.";
            } else {
                $parolatkr = $request->input("parolatkr");
            }

            if (isset($username) && isset($email) && isset($parola)) {
                $data = array(
                    'kullanici_adi' => $username,
                    'email' => $email,
                    'parola' => $parola
                );

                $inserted = DB::table('kullanicilar')->insert($data);

                if ($inserted) {
                    return redirect()->back()->with('success', 'Kayıt başarıyla tamamlandı!');
                } else {
                    return redirect()->back()->with('error', 'Kayıt eklenemedi!');
                }
            }
        }

        return view('registration', compact('username_err', 'email_err', 'parola_err', 'parolatkr_err'));
    }
}
