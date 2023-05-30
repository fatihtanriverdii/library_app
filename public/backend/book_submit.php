<?php
// Veritabanı bağlantısı için bilgiler
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "library";

// Veritabanına bağlanma
$conn = new mysqli($servername, $username, $password, $dbname);

// Bağlantıyı kontrol etme
if ($conn->connect_error) {
    die("Veritabanına bağlanılamadı: " . $conn->connect_error);
}

// POST verilerini al
$bookTitle = $_POST['book-title'];
$bookGenre = $_POST['book-genre'];
$bookPages = $_POST['book-pages'];
$bookStock = $_POST['book-stock'];

// Fotoğrafı yükleme işlemi
$targetDir = $_SERVER['DOCUMENT_ROOT'] . "/Images/"; // Yüklenen fotoğrafların kaydedileceği dizin
$bookImage = $_FILES['book-image']['name'];
$targetFile = $targetDir . basename($bookImage);

if (move_uploaded_file($_FILES['book-image']['tmp_name'], $targetFile)) {
    echo "Fotoğraf başarıyla yüklendi.";
} else {
    echo "Fotoğraf yüklenirken bir hata oluştu.";
}

// books_photo tablosuna fotoğrafı kaydet
$sql = "INSERT INTO books_photo (photo_name, photo_path) VALUES ('$bookTitle', '$targetFile')";
if ($conn->query($sql) === TRUE) {
    $photoId = $conn->insert_id; // Son eklenen fotoğrafın ID değeri

    // books tablosuna kitap bilgilerini kaydet
    $sql = "INSERT INTO books (book_name, book_type, book_page, stock, photo_id) VALUES ('$bookTitle', '$bookGenre', $bookPages, $bookStock, $photoId)";
    if ($conn->query($sql) === TRUE) {
        echo "Kitap veritabanına kaydedildi.";
    } else {
        echo "Kitap kaydedilirken bir hata oluştu: " . $conn->error;
    }
} else {
    echo "Kitap fotoğrafı kaydedilirken bir hata oluştu: " . $conn->error;
}

// Bağlantıyı kapatma
$conn->close();
