<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mesajlar</title>
    <link rel="stylesheet" href="{{ asset('css/adminMessages.css') }}">
</head>

<body>

    <header>
        <a href="#" class="logo">Welcome Fatih</a>
        <nav>
            <ul>
                <li><a href="{{ route('admin') }}">Anasayfa</a></li>
                <li><a href="{{ route('adminBooks') }}">Kitaplar</a></li>
                <li><a href="{{ route('adminUsers') }}">Kullanıcılar</a></li>
                <li id="messages"><a href="{{ route('adminMessages') }}">Mesajlar</a></li>
                <li><a href="{{ route('adminSettings') }}">Ayarlar</a></li>
            </ul>
        </nav>
        <a href="#" class="logout">Çıkış Yap</a>
    </header>

    <section>

        <article>

            <div class="container">
                <div class="person-list">
                    <ul>
                        <li class="person">
                            <div class="person-name">John Doe</div>
                            <div class="person-message-indicator"></div>
                        </li>
                        <li class="person">
                            <div class="person-name">Jane Doe</div>
                            <div class="person-message-indicator"></div>
                        </li>
                        <li class="person">
                            <div class="person-name">Bob Smith</div>
                            <div class="person-message-indicator"></div>
                        </li>
                        <li class="person">
                            <div class="person-name">Alice Johnson</div>
                            <div class="person-message-indicator"></div>
                        </li>
                        <li class="person">
                            <div class="person-name">Alice Johnson</div>
                            <div class="person-message-indicator"></div>
                        </li>
                        <li class="person">
                            <div class="person-name">Alice Johnson</div>
                            <div class="person-message-indicator"></div>
                        </li>
                        <li class="person">
                            <div class="person-name">Alice Johnson</div>
                            <div class="person-message-indicator"></div>
                        </li>
                        <li class="person">
                            <div class="person-name">Alice Johnson</div>
                            <div class="person-message-indicator"></div>
                        </li>
                        <li class="person">
                            <div class="person-name">Alice Johnson</div>
                            <div class="person-message-indicator"></div>
                        </li>
                        <li class="person">
                            <div class="person-name">Alice Johnson</div>
                            <div class="person-message-indicator"></div>
                        </li>
                        <li class="person">
                            <div class="person-name">Alice Johnson</div>
                            <div class="person-message-indicator"></div>
                        </li>
                        <li class="person">
                            <div class="person-name">Alice Johnson</div>
                            <div class="person-message-indicator"></div>
                        </li>
                        <li class="person">
                            <div class="person-name">Alice Johnson</div>
                            <div class="person-message-indicator"></div>
                        </li>
                        <li class="person">
                            <div class="person-name">Alice Johnson</div>
                            <div class="person-message-indicator"></div>
                        </li>
                        <li class="person">
                            <div class="person-name">Alice Johnson</div>
                            <div class="person-message-indicator"></div>
                        </li>
                        <li class="person">
                            <div class="person-name">Alice Johnson</div>
                            <div class="person-message-indicator"></div>
                        </li>
                        <li class="person">
                            <div class="person-name">Alice Johnson</div>
                            <div class="person-message-indicator"></div>
                        </li>
                    </ul>
                </div>
                <div class="chat-box">
                    <div class="chat-header"></div>
                    <div class="chat-messages"></div>
                    <div class="chat-input">
                        <input type="text" placeholder="Type your message...">
                        <button>Send</button>
                    </div>
                </div>
            </div>



        </article>



    </section>

    @include('layouts.adminFooter')

</body>

<script type="text/javascript" lang="javascript" src="{{ asset('js/adminMessages.js') }}"></script>

</html>