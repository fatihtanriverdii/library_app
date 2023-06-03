<?php
$host="localhost";
$kullanici="root";
$parola="";
$vt="library";

$baglanti= mysqli_connect($host,$kullanici,$parola,$vt);
mysqli_set_charset($baglanti,"UTF8");

$error = "";
$success = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['current_password']) && isset($_POST['new_password']) && isset($_POST['confirm_password'])) {
    $currentPassword = htmlspecialchars($_POST['current_password'], ENT_QUOTES, 'UTF-8');
    $newPassword = htmlspecialchars($_POST['new_password'], ENT_QUOTES, 'UTF-8');
    $confirmPassword = htmlspecialchars($_POST['confirm_password'], ENT_QUOTES, 'UTF-8');

    if ($newPassword !== $confirmPassword) {
        $error = 'Şifreler eşleşmiyor';
    } else {
        $success = 'Şifre başarıyla değiştirildi';
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Change password</title>
</head>
<body>
    <?php if (!empty($error)): ?>
        <div style="color: red;"><?= $error ?></div>
    <?php endif; ?>

    <?php if (!empty($success)): ?>
        <div style="color: green;"><?= $success ?></div>
    <?php endif; ?>

    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="current_password">Mevcut şifre:</label><br>
        <input type="password" id="current_password" name="current_password"><br><br>

        <label for="new_password">Yeni şifre:</label><br>
        <input type="password" id="new_password" name="new_password"><br><br>

        <label for="confirm_password">Yeni şifre doğrulama:</label><br>
        <input type="password" id="confirm_password" name="confirm_password"><br><br>

        <input type="submit" value="Değiştir">
    </form>
</body>
</html>
