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

        <div class="book"><img src="Images/kitablar/kitaplar2/1984-george.jpg" width="30%"></div>

        <div class="kitabdugme">
            <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom" aria-controls="offcanvasBottom">Kitabin ozetini oku</button>
            <div class="offcanvas offcanvas-bottom" tabindex="-1" id="offcanvasBottom" aria-labelledby="offcanvasBottomLabel">
                <div class="offcanvas-header">
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <h5 class="offcanvas-title" id="offcanvasBottomLabel"><span class="yazi5">1984 George Orwell Kitabı:</br></br></span>
                        <span class="yazi6">Romanda Okyanusya' da hüküm süren Big Brother isimli diktatör rejim anlatılmaktadır. Toplum sınıflara
                            ayrılmıştır. İnsanlar devamlı olarak tele ekran denilen aygıtlarla dinlenip izlenmektedir. Bireylerin günlük tutmak gibi
                            uygulamalar yapması yasaktır. Özgür düşünce' nin olmadığı bir ortam ve insanların yaşamları kısıtlanmaktadır.
                            Bu rejim istediği zaman eskiye ait düşüncelerini ve etraftaki kitap, gazetelerdeki verileri istediği tarzda değiştirerek
                            kontrol etmektedir. Hatta bu konuyla ilgili partinin düşüncesi Geçmişi kontrol eden geleceği kontrol eder. Bugünü kontrol
                            eden geçmişi de kontrol eder mantığı ile hareket etmektedir. İnsanlar 2' dk lık nefret gösterilerine katılmak zorunda
                            tutularak rejim düşmanlarına karşı taraf oluşturulmaktadır. Eğer rejim karşı çıkar ve yasaklarını çiğnerseniz yakalanıp
                            her yerden isminiz siliniyor daha önce yaşayıp yaşamadığınız böyle biri olup olmadığı bilinmiyor ve ondan sonra partinin o
                            kişiye ne yaptığı bilinmiyor. Rejim korku, propaganda ve beyin yıkama gibi işlemlerle insanların kendisine olan bağlılığını
                            artırıyor ve insanların hayatını maniple ediyor.
                            Bu ortamda yaşayan Winston ve Julia' nın gizli aşk hayatı (parti tarafından yasak olan) ve partiye karşı gelmeye uğraşları
                            anlatılıyor.</span>
                    </h5>
                    <a class="sepet" href=""><i class="fa-solid fa-cart-plus"><span class="yazi5">Sepete eklemek icin tikla</span></i></a>
                </div>
            </div>
        </div>
    </div>

    @include('layouts.footer')

</body>

</html>