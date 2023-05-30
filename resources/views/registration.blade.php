<?php
include 'C:/xampp/htdocs/library_app_laravel/config/baglanti.php';


$username_err = "";
$email_err = "";
$parola_err = "";
$parolatkr_err = "";

if (isset($_POST["Register"])) {
    //kullanici adi sorgulama
    if (empty($_POST["kullaniciadi"])) {
        $username_err = "Kullanici adi bos gecilemez";
    } elseif (strlen($_POST["kullaniciadi"]) < 5) {
        $username_err = "Kullanici adi en az 5 karakterden olusmalidir.";
    } elseif (!preg_match('/^[a-z\d_]{5,20}$/i', $_POST["kullaniciadi"])) {
        $username_err = "Kullanici adi buyuk kucuk harf ve rakamdan olusmalidir.";
    } else {
        $username = $_POST["kullaniciadi"];
    }
    //Email dogrulama
    if (empty($_POST["email"])) {
        $email_err = "Email alani bos gecilemez.";
    } elseif (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
        $email_err = "Gecersiz email formati.";
    } else {
        $email = $_POST["email"];
    }


    //Parola dogrulama
    if (empty($_POST["parola"])) {
        $parola_err = "Parola bos gecilemez.";
    } else {
        $parola = password_hash($_POST["parola"], PASSWORD_DEFAULT);
    }
    //Parola tekrar dogrulama
    if (empty($_POST["parolatkr"])) {
        $parolatkr_err = "Parola tekrak kismi bos gecilemez.";
    } elseif ($_POST["parola"] != $_POST["parolatkr"]) {
        $parolatkr_err = "Parolalar eslesmiyor.";
    } else {
        $parolatkr = $_POST["parolatkr"];
    }



    if (isset($username) && isset($email) && isset($parola)) {

        $ekle = "INSERT INTO kullanicilar (kullanici_adi,email,parola) VALUES ('$username','$email','$parola')";
        $calistir = mysqli_query($baglanti, $ekle);

        if ($calistir) {
            echo ' <div class="alert alert-success" role="alert">
    Kayit basarili sonuclandi !
  </div>';
        } else {
            echo '<div class="alert alert-danger" role="alert">
     Kayit eklenemedi ! 
</div>';
        }
        mysqli_close($baglanti);
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="{{ asset('css/registration.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</head>

<body>

    @include('layouts.header')

    <section class="vh-100 bg-image" style="background-image: url('https://mdbcdn.b-cdn.net/img/Photos/new-templates/search-box/img4.webp');">
        <div class="mask d-flex align-items-center h-100 gradient-custom-3">
            <div class="container h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                        <div class="card" style="border-radius: 15px;">
                            <div class="card-body p-3">
                                <h2 class="text-uppercase text-center mb-3">Create an account</h2>

                                <form action="registration.php" method="POST">

                                    <div class="form-outline mb-4">
                                        <input type="text" id="form3Example1cg" name="kullaniciadi" class="form-control form-control-lg 
                  <?php
                    if (!empty($username_err)) {
                        echo "is-invalid";
                    }

                    ?>
                  " />
                                        <label class="form-label" for="form3Example1cg">Your Name</label>
                                        <div id="validationServer03Feedback" class="invalid-feedback">
                                            <?php
                                            echo $username_err;

                                            ?>
                                        </div>
                                    </div>

                                    <div class="form-outline mb-3">
                                        <input type="email" id="form3Example3cg" name="email" class="form-control form-control-lg 
                  <?php
                    if (!empty($email_err)) {
                        echo "is-invalid";
                    }

                    ?>
                  " />
                                        <label class="form-label" for="form3Example3cg">Your Email</label>
                                        <div id="validationServer03Feedback" class="invalid-feedback">
                                            <?php
                                            echo $email_err;

                                            ?>
                                        </div>
                                    </div>

                                    <div class="form-outline mb-3">
                                        <input type="password" id="form3Example4cg" name="parola" class="form-control form-control-lg 
                  <?php
                    if (!empty($parola_err)) {
                        echo "is-invalid";
                    }

                    ?>
                  " />
                                        <label class="form-label" for="form3Example4cg">Password</label>
                                        <div id="validationServer03Feedback" class="invalid-feedback">
                                            <?php
                                            echo $parola_err;
                                            ?>
                                        </div>
                                    </div>

                                    <div class="form-outline mb-3">
                                        <input type="password" id="form3Example4cdg" name="parolatkr" class="form-control form-control-lg
                  <?php
                    if (!empty($parolatkr_err)) {
                        echo "is-invalid";
                    }

                    ?>
                  " />
                                        <label class="form-label" for="form3Example4cdg">Repeat your password</label>
                                        <?php
                                        echo $parolatkr_err;
                                        ?>
                                    </div>

                                    <div class="form-check d-flex justify-content-center mb-4">
                                        <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3cg" />
                                        <label class="form-check-label" for="form2Example3g">
                                            I agree all statements in <a href="#!" class="text-body"><u>Terms of service</u></a>
                                        </label>
                                    </div>

                                    <div class="d-flex justify-content-center">
                                        <button type="submit" name="Register" class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Register</button>
                                    </div>

                                    <p class="text-center text-muted mt-5 mb-0">Have already an account? <a href="signIn.html" class="fw-bold text-body"><u>Login here</u></a></p>

                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('layouts.footer')

</body>

</html>