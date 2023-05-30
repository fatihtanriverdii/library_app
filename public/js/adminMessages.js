var activePerson = null;

// kişilere tıklanınca chat kutusu açma işlemi
var persons = document.querySelectorAll(".person");
for (var i = 0; i < persons.length; i++) {
  persons[i].addEventListener("click", function() {
    // seçilen kişiyi aktif kişi olarak işaretle
    if (activePerson) {
      activePerson.classList.remove("active");
    }
    this.classList.add("active");
    activePerson = this;
    
    // chat kutusunu aç
    var chatBox = document.querySelector(".chat-box");
    chatBox.style.display = "block";
    
    // chat başlığını güncelle
    var personName = this.querySelector(".person-name").textContent;
    var chatHeader = chatBox.querySelector(".chat-header");
    chatHeader.textContent = personName;
    
    // mesajları yükle
    var chatMessages = chatBox.querySelector(".chat-messages");
    chatMessages.innerHTML = "";
    var messages = getMessages(personName); // kişinin mesajlarını getir
    for (var i = 0; i < messages.length; i++) {
      var message = messages[i];
      var sender = message.sender;
      var text = message.text;
      var className = (sender === personName) ? "chat-message received" : "chat-message sent";
      var html = "<div class='" + className + "'><div class='chat-message-sender'>" + sender + "</div><div class='chat-message-text'>" + text + "</div></div>";
      chatMessages.innerHTML += html;
    }
  });
}

// mesaj gönderme işlemi
var sendButton = document.querySelector(".chat-input button");
sendButton.addEventListener("click", function() {
  var input = document.querySelector(".chat-input input");
  var text = input.value;
  if (text.trim() === "") {
    return;
  }
  input.value = "";
  var chatMessages = document.querySelector(".chat-messages");
  var className = "chat-message sent";
  var html = "<div class='" + className + "'><div class='chat-message-sender'>You</div><div class='chat-message-text'>" + text + "</div></div>";
  chatMessages.innerHTML += html;
  var personName = activePerson.querySelector(".person-name").textContent;
  sendMessage(personName, text);
});

// mesaj alma/gönderme işlemleri için örnek veriler
var messages = [
  {sender: "John Doe", text: "Hello"},
  {sender: "Me", text: "Hi John, how are you?"},
  {sender: "John Doe", text: "I'm good, thanks. How about you?"},
  {sender: "Me", text: "I'm doing well, thanks for asking."}
];

function getMessages(personName) {
  // verilen kişiye ait mesajları döndür
  return messages.filter(function(message) {
    return message.sender === personName || message.receiver === personName;
  });
}

function sendMessage(personName, text) {
  // mesajı gönder ve kaydet
  var message = {sender: "Me", receiver: personName, text: text};
  messages.push(message);
}
