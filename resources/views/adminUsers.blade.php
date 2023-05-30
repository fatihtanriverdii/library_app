<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kullanicilar</title>
    <link rel="stylesheet" href="{{ asset('css/adminUsers.css') }}">
</head>
<body>
    
    <header>
        <a href="#" class="logo">Welcome Fatih</a>
        <nav>
          <ul>
            <li><a href="{{ route('admin') }}">Anasayfa</a></li>
            <li><a href="{{ route('adminBooks') }}">Kitaplar</a></li>
            <li id="users"><a href="{{ route('adminUsers') }}">Kullanıcılar</a></li>
            <li><a href="{{ route('adminMessages') }}">Mesajlar</a></li>
            <li><a href="{{ route('adminSettings') }}">Ayarlar</a></li>
          </ul>
        </nav>
        <a href="#" class="logout">Çıkış Yap</a>
      </header>


      <section>

        <article>

            <div class="search-container">
                <div class="search-box">
                    <input type="text" placeholder="Kullanici ID Yaziniz">
                    <button>Ara</button>
                </div>
            </div>

            <button class="add-book-btn">Kullanici Tanimla</button>


            <div class="tablo">
                <table>
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Ad</th>
                        <th>Soyad</th>
                        <th>E-mail</th>
                        <th>Telefon Numarası</th>
                        <th>Cinsiyet</th>
                        <th>İşlemler</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>1</td>
                        <td>Ali</td>
                        <td>Yılmaz</td>
                        <td>aliyilmaz@example.com</td>
                        <td>555-123-4567</td>
                        <td>Erkek</td>
                        <td><button>Düzenle</button> <button class="buttonDel">Sil</button></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Ayşe</td>
                        <td>Kara</td>
                        <td>aysekara@example.com</td>
                        <td>555-234-5678</td>
                        <td>Kadın</td>
                        <td><button>Düzenle</button> <button class="buttonDel">Sil</button></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Can</td>
                        <td>Demir</td>
                        <td>candemir@example.com</td>
                        <td>555-345-6789</td>
                        <td>Erkek</td>
                        <td><button>Düzenle</button> <button class="buttonDel">Sil</button></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Can</td>
                        <td>Demir</td>
                        <td>candemir@example.com</td>
                        <td>555-345-6789</td>
                        <td>Erkek</td>
                        <td><button>Düzenle</button> <button class="buttonDel">Sil</button></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Can</td>
                        <td>Demir</td>
                        <td>candemir@example.com</td>
                        <td>555-345-6789</td>
                        <td>Erkek</td>
                        <td><button>Düzenle</button> <button class="buttonDel">Sil</button></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Can</td>
                        <td>Demir</td>
                        <td>candemir@example.com</td>
                        <td>555-345-6789</td>
                        <td>Erkek</td>
                        <td><button>Düzenle</button> <button class="buttonDel">Sil</button></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Can</td>
                        <td>Demir</td>
                        <td>candemir@example.com</td>
                        <td>555-345-6789</td>
                        <td>Erkek</td>
                        <td><button>Düzenle</button> <button class="buttonDel">Sil</button></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Can</td>
                        <td>Demir</td>
                        <td>candemir@example.com</td>
                        <td>555-345-6789</td>
                        <td>Erkek</td>
                        <td><button>Düzenle</button> <button class="buttonDel">Sil</button></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Can</td>
                        <td>Demir</td>
                        <td>candemir@example.com</td>
                        <td>555-345-6789</td>
                        <td>Erkek</td>
                        <td><button>Düzenle</button> <button class="buttonDel">Sil</button></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Can</td>
                        <td>Demir</td>
                        <td>candemir@example.com</td>
                        <td>555-345-6789</td>
                        <td>Erkek</td>
                        <td><button>Düzenle</button> <button class="buttonDel">Sil</button></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Can</td>
                        <td>Demir</td>
                        <td>candemir@example.com</td>
                        <td>555-345-6789</td>
                        <td>Erkek</td>
                        <td><button>Düzenle</button> <button class="buttonDel">Sil</button></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Can</td>
                        <td>Demir</td>
                        <td>candemir@example.com</td>
                        <td>555-345-6789</td>
                        <td>Erkek</td>
                        <td><button>Düzenle</button> <button class="buttonDel">Sil</button></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Can</td>
                        <td>Demir</td>
                        <td>candemir@example.com</td>
                        <td>555-345-6789</td>
                        <td>Erkek</td>
                        <td><button>Düzenle</button> <button class="buttonDel">Sil</button></td>
                    </tr>
                    </tbody>
                </table>
            </div>

        </article>

      </section>

    @include('layouts.adminFooter')

</body>
</html>