<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library</title>
    <link rel="stylesheet" href="{{ asset('css/library.css') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css"
    integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">


<body>

    @include('layouts.header')

    <section>

    <section>
        <article>
            <span class="yazi1">Find Your Book Of Choice</span>
            <br/><br/><br/>
            <div class="searchbox">
                <input type="text" class="tbox">
                <a class="buttonsearch" href="#">
                    <i class="fas fa-search"></i>
                </a>
            </div>
        </article> 

        <div class="container">
            <div class="yazi2"><span>Herkesin Hayatına Dokunan, Mutlaka Okunması Gereken 8 Kitap!</span></div>

            <div class="scrollable-wrapper">
                <div class="box"><a href="{{ route('book') }}"><img src="{{ asset('Images/kitablar/1984.jpg') }}"><span class="yazi3">1984</span></a></div>
                <div class="box"><a href=""><img src="{{ asset('Images/kitablar/bulbulu.jpg') }}"><span class="yazi3">Bulbulu Öldürmek</span></a></div>
                <div class="box"><a href=""><img src="{{ asset('Images/kitablar/donusum.jpg') }}"><span class="yazi3">Dönüşüm</span></a></div>
                <div class="box"><a href=""><img src="{{ asset('Images/kitablar/fahrnheit.jpg') }}"><span class="yazi3">Fahrenheit 451</span></a></div>
                <div class="box"><a href=""><img src="{{ asset('Images/kitablar/fareler.jpg') }}"><span class="yazi3">Fareler ve İnsanlar</span></a></div>
                <div class="box"><a href=""><img src="{{ asset('Images/kitablar/marti.jpg') }}"><span class="yazi3">Martı</span></a></div>
                <div class="box"><a href=""><img src="{{ asset('Images/kitablar/hayvan.jpg') }}"><span class="yazi3">Hayvan Çiftliği</span></a></div>
                <div class="box"><a href=""><img src="{{ asset('Images/kitablar/ucurtma acisi.jpg') }}"><span class="yazi3">Uçurtma Avcısı</span></a></div>
            </div>
        </div>

    </section>

    @include('layouts.footer')

</body>

</html>