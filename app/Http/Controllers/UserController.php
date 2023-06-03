<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        try {
            $users = User::all(); // Tüm kullanıcıları veritabanından al
    
            return view('users.index', compact('users')); // users.index view'ına kullanıcıları geçir
        } catch (\Exception $e) {
            // Hata durumunda hatayı yakalayın ve işleyin
            // Örneğin, hata mesajını yazdırabilir veya başka bir işlem yapabilirsiniz
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
    
    public function submit(Request $request)
    {
        // Form verilerini al
        $kullaniciAdi = $request->input('kullanici_adi');
        $email = $request->input('email');
        $parola = $request->input('parola');

        // Yeni bir User modeli oluştur
        $user = new User;
        $user->kullanici_adi = $kullaniciAdi;
        $user->email = $email;
        $user->parola = $parola;

        // Kullanıcıyı veritabanına kaydet
        $user->save();

        // Başarılı bir şekilde kaydedildikten sonra yönlendirme yapabilirsiniz
        return redirect()->back()->with('success', 'Kullanıcı başarıyla tanımlandı.');
    }

}
