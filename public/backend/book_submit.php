<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Form verilerini al
    $bookTitle = $_POST['book-title'];
    $bookGenre = $_POST['book-genre'];
    $bookPages = $_POST['book-pages'];
    $bookSummary = $_POST['book-summary'];
    $bookStock = $_POST['book-stock'];
    $bookImage = $_FILES['book-image'];

    // Hedef klasörü belirle
    $targetDirectory = "Images/"; // Kaydetmek istediğiniz klasör yolunu buraya girin
    $targetFile = $targetDirectory . basename($bookImage["name"]);

    // Fotoğrafı hedef klasöre taşı
    if (move_uploaded_file($bookImage["tmp_name"], public_path($targetFile))) {
        // Veritabanı bağlantısı için gerekli bilgileri ayarla
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "library";

        // Veritabanına bağlan
        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error) {
            die("Veritabanına bağlanırken hata oluştu: " . $conn->connect_error);
        }

        // Kitap bilgilerini veritabanına kaydet
        $sql = "INSERT INTO books (photo_name, photo_path, book_name, book_type, book_page, book_summary, stock) VALUES ('$bookImage[name]', '$targetFile', '$bookTitle', '$bookGenre', $bookPages, '$bookSummary', $bookStock)";


        if ($conn->query($sql) === TRUE) {
            echo "Kitap başarıyla kaydedildi.";
        } else {
            echo "Hata oluştu: " . $conn->error;
        }

        $conn->close();
    } else {
        echo "Fotoğraf yüklenirken bir hata oluştu.";
    }
}
?>
