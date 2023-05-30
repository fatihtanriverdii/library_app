<head>
    <link rel="stylesheet" href="{{ asset('css/library.css') }}">
</head>

<header>
    <div class="logo">
        <h1>BookHub</h1>
    </div>

    <div id="YanMenu" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">

            &times;</a>

        <a href="{{ route('profile') }}">Hesabim</a>
        <a href="#">Sepetim</a>
        <a href="#" onclick="toggleSubMenu()">Kategoriler</a>
        <div id="subMenu" class="sub-menu">
            <a href="#">Ansiklopediler</a>
            <a href="#">Ders Kitapları</a>
            <a href="#">El Kitapları</a>
            <a href="#">Felsefi Kitaplar</a>
            <a href="#">Hukuk Kitapları</a>
            <a href="#">Işletme Kitapları</a>
            <a href="#">Otobiyografiler</a>
            <a href="#">Romanlar</a>
            <a href="#">Şiirler</a>
            <a href="#">Sözlükler</a>
            <a href="#">Tarihi Kitaplar</a>
        </div>
    </div>


    <span style="font-size:30px;cursor:pointer; float: right;" onclick="openNav()">
        &#9776;
    </span>
    <script type="text/javascript" lang="javascript" src="{{ asset('js/menu.js') }}"></script>
</header>