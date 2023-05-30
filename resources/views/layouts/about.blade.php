<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <link rel="stylesheet" href="{{ asset('css/about.css') }}">

    <!--Bootstrap CDN-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" type="text/css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!--CDN End Here-->
</head>

<body>

    @include('layouts.header')

    <div class="about">

        <div>
            <figure class="text-center">
                <blockquote class="blockquote">
                    <p class="lead">
                        Our Team.
                    </p>
                    <p> WITH OUR CORE VALUES OF HONESTY, HARD WORK, AND TRUST.</p>
                </blockquote>
                <figcaption class="blockquote-footer">
                    Karabuk <cite title="Source Title">Team</cite>
                </figcaption>
            </figure>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-4">
                    <div class="profile-card">
                        <div class="profile-img">
                            <img src="/Images/about/iboo.jpg" alt="Team Image" />
                        </div>
                        <div class="profile-content">
                            <h2 class="title">Ibrokhim Iminov
                                <span>Designer & Developer</span>
                            </h2>
                            <ul class="social-link">
                                <li><a href="#" class="fa fa-facebook"></a></li>
                                <li><a href="https://www.instagram.com/iminov__i/" class="fa fa-instagram" target="_blank"></a></li>
                                <li><a href="#" class="fa fa-twitter"></a></li>
                                <li><a href="#" class="fa fa-google"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="profile-card">
                        <div class="profile-img">
                            <img src="/Images/about/sevval.jpg" alt="Team Image" />
                        </div>
                        <div class="profile-content">
                            <h2 class="title">Sevval Balcik
                                <span>Designer & Developer</span>
                            </h2>
                            <ul class="social-link">
                                <li><a href="#" class="fa fa-facebook"></a></li>
                                <li><a href="https://www.instagram.com/sevvalbalcikk/" class="fa fa-instagram" target="_blank"></a></li>
                                <li><a href="#" class="fa fa-twitter"></a></li>
                                <li><a href="#" class="fa fa-google"></a></li>

                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="profile-card">
                        <div class="profile-img">
                            <img src="/Images/about/fatih.jpg" alt="Team Image" />
                        </div>
                        <div class="profile-content">
                            <h2 class="title">Fatih Tanriverdi
                                <span>Designer & Developer</span>
                            </h2>
                            <ul class="social-link">
                                <li><a href="#" class="fa fa-facebook"></a></li>
                                <li><a href="https://www.instagram.com/_fatihtanriverdi_/" class="fa fa-instagram" target="_blank"></a></li>
                                <li><a href="#" class="fa fa-twitter"></a></li>
                                <li><a href="#" class="fa fa-google"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    @include('layouts.footer')

</body>

</html>