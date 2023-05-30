<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Paneli</title>
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
</head>
<body>

<header>
        <a href="#" class="logo">Welcome Fatih</a>
        <nav>
          <ul>
            <li id="webpage"><a href="{{ route('admin') }}">Anasayfa</a></li>
            <li><a href="{{ route('adminBooks') }}">Kitaplar</a></li>
            <li><a href="{{ route('adminUsers') }}">Kullanıcılar</a></li>
            <li><a href="{{ route('adminMessages') }}">Mesajlar</a></li>
            <li><a href="{{ route('adminSettings') }}">Ayarlar</a></li>
          </ul>
        </nav>
        <a href="#" class="logout">Çıkış Yap</a>
</header>

      <section>
        <article>
          <div class="container">
            <div class="box">
              <h2>Kitap Sayısı</h2>
              <p id="kitapSayisi">0</p>
            </div>
            <div class="box">
              <h2>Kullanıcı Sayısı</h2>
              <p id="kullaniciSayisi">0</p>
            </div>
            <div class="box">
              <h2>İstek Kitap Sayısı</h2>
              <p id="istekKitapSayisi">0</p>
            </div>
            <div class="box">
              <h2>Ayırtılan Kitap Sayısı</h2>
              <p id="ayirtilanKitapSayisi">0</p>
            </div>
          </div>


          <div class="containerd">
            <div class="duyuru-form">
              <h2>Yeni Duyuru</h2>
              <textarea id="duyuruMetni" placeholder="Duyuru metni..."></textarea>
              <button id="duyuruEkleButton">Duyuru Ekle</button>
            </div>
            <div class="duyurular">
              <h2>Eski Duyurular</h2>
              <ul id="duyuruListesi"></ul>
            </div>
          </div>
        </article>
      </section>

      
    @include('layouts.adminFooter')

</body>
<script type="text/javascript" lang="javascript" src="{{ asset('js/admin.js') }}"></script>
</html>