<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kullanicilar</title>
    <link rel="stylesheet" href="{{ asset('css/adminUsers.css') }}">
    <link rel="stylesheet" href="{{ asset('css/adminBooks.css') }}">
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

            <button class="add-book-btn" onclick="openAddUserModal()">Kullanici Tanimla</button>

            <div id="add-user-modal" class="modal">
                <div class="modal-content">
                    <span class="close" onclick="closeAddUserModal()">&times;</span>
                    <form id="add-user-form" enctype="multipart/form-data" action="{{ route('user.submit') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="username">Kullanıcı Adı:</label>
                            <input type="text" id="username" name="kullanici_adi" required>
                        </div>
                        <div class="form-group">
                            <label for="email">E-posta:</label>
                            <input type="email" id="email" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Parola:</label>
                            <input type="password" id="password" name="parola" required>
                        </div>
                        <input type="submit" value="Kullanıcı Tanımla">
                    </form>
                </div>
            </div>
            


            <div class="tablo">
                <?php

                use Illuminate\Support\Facades\DB;

                $users = DB::table('kullanicilar')->get();

                // Tablo başlıkları
                $table = '<table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Kullanıcı Adı</th>
                        <th>E-mail</th>
                        <th>Parola</th>
                        <th>Kayıt Tarihi</th>
                        <th>İşlemler</th>
                    </tr>
                </thead>
                <tbody>';

                // Tablo satırları
                foreach ($users as $user) {
                    $id = $user->id;
                    $kullanici_adi = $user->kullanici_adi;
                    $email = $user->email;
                    $parola = $user->parola;
                    $kayit_tarihi = $user->kayit_tarihi;

                    $table .= '<tr>
                        <td>' . $id . '</td>
                        <td>' . $kullanici_adi . '</td>
                        <td>' . $email . '</td>
                        <td>' . $parola . '</td>
                        <td>' . $kayit_tarihi . '</td>
                        <td>
                            <button>Düzenle</button>
                            <button class="buttonDel">Sil</button>
                        </td>
                    </tr>';
                }

                // Tablo kapanışı
                $table .= '</tbody></table>';

                // Oluşturulan tabloyu görüntüle
                echo $table;
                ?>

            </div>

        </article>

    </section>

    @include('layouts.adminFooter')

</body>
<script type="text/javascript" lang="javascript" src="{{ asset('js/admin.js') }}"></script>

</html>