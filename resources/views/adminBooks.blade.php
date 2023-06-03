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
                    <form id="add-book-form" enctype="multipart/form-data" action="{{ route('book.submit') }}" method="POST">
                        @csrf
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
                            <label for="book-summary">Kitap Özeti:</label>
                            <textarea id="book-summary" name="book-summary" required>{{ old('book-summary') }}</textarea>
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

                <?php

                use Illuminate\Support\Facades\DB;

                $books = DB::table('books')->get();

                // Tablo başlıkları
                $table = '<table>
                <thead>
                    <tr>
                        <th>Fotoğraf</th>
                        <th>Kitap İsmi</th>
                        <th>Kitap Türü</th>
                        <th>Kitap Sayfası</th>
                        <th>Kitap Özeti</th>
                        <th>Stok</th>
                        <th>İşlemler</th>
                    </tr>
                </thead>
                <tbody>';

                // Tablo satırları
                foreach ($books as $book) {
                    $photo_name = $book->photo_name;
                    $photo_path = $book->photo_path;
                    $book_name = $book->book_name;
                    $book_type = $book->book_type;
                    $book_page = $book->book_page;
                    $book_summary = $book->book_summary;
                    $stock = $book->stock;

                    $table .= '<tr>
                    <td><img src="Images/' . $photo_path . '" width="100" height="100"></td>
                    <td>' . $book_name . '</td>
                    <td>' . $book_type . '</td>
                    <td>' . $book_page . '</td>
                    <td>' . $book_summary . '</td>
                    <td>' . $stock . '</td>
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