<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/kitap.css') }}">
</head>

<body>

    @include('layouts.header')

    <div class="bookBackground">
        @if (isset($book))
            <div class="book"><img src="{{ asset('Images/' . $book->photo_path) }}" width="30%"></div>

                <div class="kitabdugme">
                    <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom" aria-controls="offcanvasBottom">Kitabin ozetini oku</button>
                    <div class="offcanvas offcanvas-bottom" tabindex="-1" id="offcanvasBottom" aria-labelledby="offcanvasBottomLabel">
                        <div class="offcanvas-header">
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body">
                            <h5 class="offcanvas-title" id="offcanvasBottomLabel">
                                <span class="yazi5">{{ $book->book_name }}:</br></br></span>
                                <span class="yazi6">{{ $book->book_summary }}</span>
                            </h5>
                            <a class="sepet" href=""><i class="fa-solid fa-cart-plus"><span class="yazi5">Sepete eklemek icin tikla</span></i></a>
                        </div>
                    </div>
                </div>
            </div>
        @else
            <div class="yazi5" style="color:aliceblue;">{{ $error }}</div>
        @endif
    
    @include('layouts.footer')
</body>

</html>
