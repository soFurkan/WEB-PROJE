<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giriş Yap</title>
    <link rel="stylesheet" href="./css/login.css">
</head>
<body>
    <div class="login">
        <div class="login-screen">

        <div class="app-title">
        <h1>Giriş Yap</h1>
        </div>
        <form action="./islem.php" method="post">
        <div class="login-form">
            <div class="control-group">
                <input type="email" name="email" class="login-field" placeholder="Mail Adresi" id="login-email" required>
                <label for="login-email" class="login-field-icon fui-user"></label>
            </div>
            <div class="control-group">
                <input type="password" name="password" class="login-field" placeholder="Şifre" id="login-pass" required>
                <label for="login-pass" class="login-field-icon fui-user"></label>
            </div>
            
            <button href="./index.php" name="giris" class="btn btn-primary btn-large btn-block">Giriş Yap</button>
            <a href="./kayit.php" class="btn btn-primary btn-large btn-block">Kayıt Ol</a>
        </div>
        </form>
        </div>
    </div>


</body>
</html>