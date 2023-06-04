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
                ?>

                <table>
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
                    <tbody>
                        <?php foreach ($books as $book) : ?>
                            <tr>
                                <td><img src="Images/<?php echo $book->photo_path; ?>" width="100" height="100"></td>
                                <td><?php echo $book->book_name; ?></td>
                                <td><?php echo $book->book_type; ?></td>
                                <td><?php echo $book->book_page; ?></td>
                                <td><?php echo $book->book_summary; ?></td>
                                <td><?php echo $book->stock; ?></td>
                                <td>
                                <button onclick="openUpdateBookModal('<?php echo $book->id; ?>')">Güncelle</button>

                                    <div id="update-book-modal" class="modal">
                                        <div class="modal-content">
                                            <span class="close" onclick="closeUpdateBookModal()">&times;</span>
                                            <form id="update-book-form" enctype="multipart/form-data" action="{{ route('book.update', $book->id) }}" method="POST">
                                                @csrf
                                                @method('PUT')
                                                <div class="form-group">
                                                    <input type="hidden" id="update-book-id" name="book-id">
                                                    <label for="update-book-title">Kitap İsmi:</label>
                                                    <input type="text" id="update-book-title" name="book-title" value="{{ $book->book_name }}" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="update-book-genre">Kitap Türü:</label>
                                                    <input type="text" id="update-book-genre" name="book-genre" value="{{ $book->book_type }}" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="update-book-pages">Kitap Sayfası:</label>
                                                    <input type="number" id="update-book-pages" name="book-pages" value="{{ $book->book_page }}" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="update-book-summary">Kitap Özeti:</label>
                                                    <textarea id="update-book-summary" name="book-summary" required>{{ $book->book_summary }}</textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label for="update-book-stock">Stok Miktarı:</label>
                                                    <input type="number" id="update-book-stock" name="book-stock" value="{{ $book->stock }}" required>
                                                </div>
                                                <input type="submit" value="Güncelle">
                                            </form>
                                        </div>
                                    </div>
                                    <button onclick="deleteBook('<?php echo $book->book_name; ?>')">Sil</button>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>


            </div>
        </article>

    </section>

    @include('layouts.adminFooter')

</body>
<script type="text/javascript" lang="javascript" src="{{ asset('js/admin.js') }}"></script>

</html>