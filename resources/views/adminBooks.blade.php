<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kitaplar</title>
    <link rel="stylesheet" href="{{ asset('css/adminBooks.css') }}">

</head>

<body>

<header>
        <a href="#" class="logo">Welcome Fatih</a>
        <nav>
          <ul>
            <li><a href="{{ route('admin') }}">Anasayfa</a></li>
            <li id="books"><a href="{{ route('adminBooks') }}">Kitaplar</a></li>
            <li><a href="{{ route('adminUsers') }}">Kullanıcılar</a></li>
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
                    <input type="text" placeholder="Kitabın İsmini Yazınız">
                    <button>Ara</button>
                </div>
            </div>

            <button class="add-book-btn" onclick="openAddBookModal()">Kitap Ekle</button>

            <div id="add-book-modal" class="modal">
                <div class="modal-content">
                    <span class="close" onclick="closeAddBookModal()">&times;</span>
                    <form id="add-book-form" enctype="multipart/form-data" action="/backend/book_submit.php" method="POST">
                        <div class="form-group">
                            <label for="book-title">Kitap İsmi:</label>
                            <input type="text" id="book-title" name="book-title" required>
                        </div>
                        <div class="form-group">
                            <label for="book-genre">Kitap Türü:</label>
                            <input type="text" id="book-genre" name="book-genre" required>
                        </div>
                        <div class="form-group">
                            <label for="book-pages">Kitap Sayfası:</label>
                            <input type="number" id="book-pages" name="book-pages" required>
                        </div>
                        <div class="form-group">
                            <label for="book-stock">Stok Miktarı:</label>
                            <input type="number" id="book-stock" name="book-stock" required>
                        </div>
                        <div class="form-group">
                            <label for="book-image">Fotoğraf Yükle:</label>
                            <input type="file" id="book-image" name="book-image" required>
                        </div>
                        <input type="submit" value="submit">
                    </form>
                </div>
            </div>



            <div class="tablo">

                <table>
                    <thead>
                        <tr>
                            <th>Kitap Bilgisi</th>
                            <th>Barkod</th>
                            <th>Kitap İsmi</th>
                            <th>Kitap Türü</th>
                            <th>Kitap Sayfası</th>
                            <th>Stok Miktarı</th>
                            <th>İşlemler</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Kitap Bilgisi 1</td>
                            <td>123456789</td>
                            <td>Kitap İsmi 1</td>
                            <td>Kitap Türü 1</td>
                            <td>200</td>
                            <td>10</td>
                            <td>
                                <button>Düzenle</button>
                                <button class="buttonDel">Sil</button>
                            </td>
                        </tr>
                        <tr>
                            <td>Kitap Bilgisi 2</td>
                            <td>987654321</td>
                            <td>Kitap İsmi 2</td>
                            <td>Kitap Türü 2</td>
                            <td>300</td>
                            <td>5</td>
                            <td>
                                <button>Düzenle</button>
                                <button class="buttonDel">Sil</button>
                            </td>
                        </tr>
                        <tr>
                            <td>Kitap Bilgisi 2</td>
                            <td>987654321</td>
                            <td>Kitap İsmi 2</td>
                            <td>Kitap Türü 2</td>
                            <td>300</td>
                            <td>5</td>
                            <td>
                                <button>Düzenle</button>
                                <button class="buttonDel">Sil</button>
                            </td>
                        </tr>
                        <tr>
                            <td>Kitap Bilgisi 2</td>
                            <td>987654321</td>
                            <td>Kitap İsmi 2</td>
                            <td>Kitap Türü 2</td>
                            <td>300</td>
                            <td>5</td>
                            <td>
                                <button>Düzenle</button>
                                <button class="buttonDel">Sil</button>
                            </td>
                        </tr>
                        <tr>
                            <td>Kitap Bilgisi 2</td>
                            <td>987654321</td>
                            <td>Kitap İsmi 2</td>
                            <td>Kitap Türü 2</td>
                            <td>300</td>
                            <td>5</td>
                            <td>
                                <button>Düzenle</button>
                                <button class="buttonDel">Sil</button>
                            </td>
                        </tr>
                        <tr>
                            <td>Kitap Bilgisi 2</td>
                            <td>987654321</td>
                            <td>Kitap İsmi 2</td>
                            <td>Kitap Türü 2</td>
                            <td>300</td>
                            <td>5</td>
                            <td>
                                <button>Düzenle</button>
                                <button class="buttonDel">Sil</button>
                            </td>
                        </tr>
                        <tr>
                            <td>Kitap Bilgisi 2</td>
                            <td>987654321</td>
                            <td>Kitap İsmi 2</td>
                            <td>Kitap Türü 2</td>
                            <td>300</td>
                            <td>5</td>
                            <td>
                                <button>Düzenle</button>
                                <button class="buttonDel">Sil</button>
                            </td>
                        </tr>
                        <tr>
                            <td>Kitap Bilgisi 2</td>
                            <td>987654321</td>
                            <td>Kitap İsmi 2</td>
                            <td>Kitap Türü 2</td>
                            <td>300</td>
                            <td>5</td>
                            <td>
                                <button>Düzenle</button>
                                <button class="buttonDel">Sil</button>
                            </td>
                        </tr>
                        <tr>
                            <td>Kitap Bilgisi 2</td>
                            <td>987654321</td>
                            <td>Kitap İsmi 2</td>
                            <td>Kitap Türü 2</td>
                            <td>300</td>
                            <td>5</td>
                            <td>
                                <button>Düzenle</button>
                                <button class="buttonDel">Sil</button>
                            </td>
                        </tr>
                        <tr>
                            <td>Kitap Bilgisi 2</td>
                            <td>987654321</td>
                            <td>Kitap İsmi 2</td>
                            <td>Kitap Türü 2</td>
                            <td>300</td>
                            <td>5</td>
                            <td>
                                <button>Düzenle</button>
                                <button class="buttonDel">Sil</button>
                            </td>
                        </tr>
                        <tr>
                            <td>Kitap Bilgisi 2</td>
                            <td>987654321</td>
                            <td>Kitap İsmi 2</td>
                            <td>Kitap Türü 2</td>
                            <td>300</td>
                            <td>5</td>
                            <td>
                                <button>Düzenle</button>
                                <button class="buttonDel">Sil</button>
                            </td>
                        </tr>
                        <tr>
                            <td>Kitap Bilgisi 2</td>
                            <td>987654321</td>
                            <td>Kitap İsmi 2</td>
                            <td>Kitap Türü 2</td>
                            <td>300</td>
                            <td>5</td>
                            <td>
                                <button>Düzenle</button>
                                <button class="buttonDel">Sil</button>
                            </td>
                        </tr>
                        <tr>
                            <td>Kitap Bilgisi 2</td>
                            <td>987654321</td>
                            <td>Kitap İsmi 2</td>
                            <td>Kitap Türü 2</td>
                            <td>300</td>
                            <td>5</td>
                            <td>
                                <button>Düzenle</button>
                                <button class="buttonDel">Sil</button>
                            </td>
                        </tr>
                        <tr>
                            <td>Kitap Bilgisi 2</td>
                            <td>987654321</td>
                            <td>Kitap İsmi 2</td>
                            <td>Kitap Türü 2</td>
                            <td>300</td>
                            <td>5</td>
                            <td>
                                <button>Düzenle</button>
                                <button class="buttonDel">Sil</button>
                            </td>
                        </tr>
                        <!-- buraya daha fazla tablo verisi eklenebilir -->
                    </tbody>
                </table>

            </div>
        </article>

    </section>

    @include('layouts.adminFooter')

</body>
<script type="text/javascript" lang="javascript" src="{{ asset('js/admin.js') }}"></script>

</html>