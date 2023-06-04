let kitapSayisi = 50;
let kullaniciSayisi = 100;
let istekKitapSayisi = 20;
let ayirtilanKitapSayisi = 10;

function sayilariGuncelle() {
    document.getElementById("kitapSayisi").textContent = kitapSayisi;
    document.getElementById("kullaniciSayisi").textContent = kullaniciSayisi;
    document.getElementById("istekKitapSayisi").textContent = istekKitapSayisi;
    document.getElementById("ayirtilanKitapSayisi").textContent = ayirtilanKitapSayisi;
}

window.addEventListener("DOMContentLoaded", sayilariGuncelle);


let duyurular = [];

function duyuruEkle() {
    const duyuruMetni = document.getElementById("duyuruMetni").value;
    duyurular.push(duyuruMetni);
    document.getElementById("duyuruMetni").value = "";
    duyuruListesiniGuncelle();
}

function duyuruListesiniGuncelle() {
    const duyuruListesi = document.getElementById("duyuruListesi");
    duyuruListesi.innerHTML = "";

    for (let i = 0; i < duyurular.length; i++) {
        const duyuru = document.createElement("li");
        duyuru.textContent = duyurular[i];

        const editButton = document.createElement("button");
        editButton.textContent = "Güncelle";
        editButton.addEventListener("click", function () {
            const yeniMetin = prompt("Yeni duyuru metnini girin:", duyurular[i]);
            if (yeniMetin) {
                duyurular[i] = yeniMetin;
                duyuruListesiniGuncelle();
            }
        });

        duyuru.appendChild(editButton);
        duyuruListesi.appendChild(duyuru);
    }
}

document.getElementById("duyuruEkleButton").addEventListener("click", duyuruEkle);

window.addEventListener("DOMContentLoaded", duyuruListesiniGuncelle);



document.getElementById("saveSettings").addEventListener("click", function () {
    var firstName = document.getElementById("firstName").value;
    var lastName = document.getElementById("lastName").value;
    var email = document.getElementById("email").value;
    var phone = document.getElementById("phone").value;
    var gender = document.getElementById("gender").value;
    var password = document.getElementById("password").value;

    // Ayarları güncelleme işlemleri
    console.log("İsim:", firstName);
    console.log("Soyisim:", lastName);
    console.log("E-mail:", email);
    console.log("Telefon:", phone);
    console.log("Cinsiyet:", gender);
    console.log("Şifre:", password);
});


function openAddBookModal() {
    var modal = document.getElementById("add-book-modal");
    modal.style.display = "block";
}

function closeAddBookModal() {
    var modal = document.getElementById("add-book-modal");
    modal.style.display = "none";
}

var addBookForm = document.getElementById("add-book-form");
addBookForm.addEventListener("submit", function (event) {
    event.preventDefault();
    // Form verilerini işleme kodlarını buraya ekleyin
    closeAddBookModal(); // Form gönderildikten sonra pencereyi kapatmak için
});


// admin.js

function openAddUserModal() {
    document.getElementById("add-user-modal").style.display = "block";
}

function closeAddUserModal() {
    document.getElementById("add-user-modal").style.display = "none";
}



// Güncelleme için modalı açma
function openUpdateBookModal(bookId) {
    const modal = document.getElementById("update-book-modal");
    const form = document.getElementById("update-book-form");
  
    // Kitap bilgilerini almak için AJAX kullanın
    const xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function() {
      if (xhr.readyState === 4 && xhr.status === 200) {
        const book = JSON.parse(xhr.responseText);
  
        // Kitap bilgilerini form alanlarına aktarın
        document.getElementById("update-book-id").value = book.id;
        document.getElementById("update-book-title").value = book.book_name;
        document.getElementById("update-book-genre").value = book.book_type;
        document.getElementById("update-book-pages").value = book.book_page;
        document.getElementById("update-book-summary").value = book.book_summary;
        document.getElementById("update-book-stock").value = book.stock;
  
        // Modalı görüntüleyin
        modal.style.display = "block";
      }
    };
    xhr.open("GET", "/book/" + bookId, true);
    xhr.send();
  }
  
  // Güncelleme için modalı kapatma
  function closeUpdateBookModal() {
    const modal = document.getElementById("update-book-modal");
    modal.style.display = "none";
  }
  
  // Kitabı silme
  function deleteBook(bookName) {
    // Silme işlemini gerçekleştirmek için gerekli olan kodları burada uygulayabilirsiniz
    console.log("Kitap silindi: " + bookName);
  }
  