<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library</title>
    <link rel="stylesheet" href="{{ asset('css/library.css') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">

<body>

    @include('layouts.header2')

    <section>

        <article>
            <span class="yazi1">Find Your Book Of Choise</span>
            <br /><br /><br />
            <div class="searchbox">
                <input type="text" class="tbox">
                <a class="buttonsearch" href="">
                    <i class="fas fa-search"></i>
                </a>
            </div>

        </article>

        <div class="container">
            <div class="yazi2"><span>Herkesin Hayatına Dokunan, Mutlaka Okunması Gereken 8 Kitap!</span></div>

            <div class="scrollable-wrapper">
                @foreach ($books as $book)
                <div class="box">
                    <a href="{{ route('book') }}">
                        <img src="{{ asset('Images/' . $book->photo_path) }}">
                        <span class="yazi3">{{ $book->book_name }}</span>
                    </a>
                </div>
                @endforeach
            </div>
        </div>

    </section>

    @include('layouts.footer2')

</body>

</html>