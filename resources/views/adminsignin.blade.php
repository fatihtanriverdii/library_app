<?php
$config = config('baglanti');


$email_err = "";
$parola_err = "";

if (isset($_POST["giris1"])) {

    //Email dogrulama
    if (empty($_POST["email"])) {
        $email_err = "Email alani bos gecilemez.";
    } else {
        $email = $_POST["email"];
    }


    //Parola dogrulama
    if (empty($_POST["parola"])) {
        $parola_err = "Parola bos gecilemez.";
    } else {
        $parola = $_POST["parola"];
    }




    if (isset($email) && isset($parola)) {
        $secim = "SELECT * FROM adminler WHERE email ='$email'";
        $calistir = mysqli_query($baglanti, $secim);
        $kayitsayisi = mysqli_num_rows($calistir);
        if ($kayitsayisi > 0) {
            $ilgilikayit = mysqli_fetch_assoc($calistir);
            $haslisifre = $ilgilikayit["parola"];
            if (password_verify($parola, $haslisifre)) {
                session_start();
                $_SESSION["email"] = $ilgilikayit["email"];
                $_SESSION["admin_adi"] = $ilgilikayit["admin_adi"];
                header("Location:index2.php");
            } else {
                echo ' <div class="alert alert-danger" role="alert">
      Parola yanlis
    </div>';
            }
        } else {
            echo ' <div class="alert alert-danger" role="alert">
    Email yanlis
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
    <title>Library</title>
    <link rel="stylesheet" href="{{ asset('css/library.css') }}">
    <link rel="stylesheet" href="{{ asset('css/signIn.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">

<body>

    @include('layouts.header')

    <div class="girisyap">
        <div class="girisform">
        <form action="{{ route('adminsignIn') }}" method="POST">

                {!! csrf_field() !!}
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" <?php
                                                                                                                                if (!empty($email_err)) {
                                                                                                                                    echo "is-invalid";
                                                                                                                                }

                                                                                                                                ?>>
                    <?php
                    echo $email_err;

                    ?>
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" name="parola" <?php
                                                                                                            if (!empty($parola_err)) {
                                                                                                                echo "is-invalid";
                                                                                                            }

                                                                                                            ?>>
                    <?php
                    echo $parola_err;
                    ?>
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                </div>
                <button type="submit" name="giris1" class="btn btn-primary">Log-In</button>
            </form>
        </div>
    </div>

    @include('layouts.footer')

</body>

</html>