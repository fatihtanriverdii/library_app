<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ayarlar</title>
    <link rel="stylesheet" href="{{ asset('css/adminSettings.css') }}">
</head>

<body>


    <header>

        <a href="#" class="logo">Welcome Fatih</a>
        <nav>
            <ul>
                <li><a href="{{ route('admin') }}">Anasayfa</a></li>
                <li><a href="{{ route('adminBooks') }}">Kitaplar</a></li>
                <li><a href="{{ route('adminUsers') }}">Kullanıcılar</a></li>
                <li><a href="{{ route('adminMessages') }}">Mesajlar</a></li>
                <li id="settings"><a href="{{ route('adminSettings') }}">Ayarlar</a></li>
            </ul>
        </nav>
        <a href="#" class="logout">Çıkış Yap</a>
    </header>

    <section>
        <article>
            <h1>Admin Ayarlar Paneli</h1>

            <div class="settings-panel">
                <h2>Kişisel Bilgiler</h2>
                <label for="firstName">İsim:</label>
                <input type="text" id="firstName">

                <label for="lastName">Soyisim:</label>
                <input type="text" id="lastName">

                <label for="email">E-mail:</label>
                <input type="email" id="email">

                <label for="phone">Telefon:</label>
                <input type="tel" id="phone">

                <label for="gender">Cinsiyet:</label>
                <select id="gender">
                    <option value="male">Erkek</option>
                    <option value="female">Kadın</option>
                    <option value="other">Diğer</option>
                </select>

                <label for="password">Şifre:</label>
                <input type="password" id="password">

                <button id="saveSettings">Ayarları Kaydet</button>
            </div>

        </article>
    </section>


</body>

<script type="text/javascript" lang="javascript" src="{{ asset('js/admin.js') }}"></script>
</html>