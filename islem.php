<?php

require 'baglan.php';


if(isset($_POST['kayit']))
{
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password_again = @$_POST['password_again'];

    if(!$email)
    {
        echo "Lütfen mail adresinizi girin";
    }
    elseif(!$password || !$password_again)
    {
        echo "Lütfen şifrenizi giriniz";
    }
    elseif($password != $password_again)
    {
        echo "Girdiğiniz şifreler birbirleriyle uyumlu değil.";
    }
    else
    {
        //veritabanı kayıt işlemi
        $sorgu = $conn->prepare('INSERT INTO users SET user_email = ?, user_password = ?');
        $ekle = $sorgu->execute([
            $email,$password
        ]);
        if($ekle)
        {
            echo "Kayıt başarıyla gerçekleşti, yönlendiriliyorsunuz";
            header('Refresh:2; index.php');
        }
        else
        {
            echo "Bir hata oluştu,Tekrar kontrol ediniz.";
        }
    }
}

if(isset($_POST['giris']))
{
    $email = $_POST['email'];
    $password = $_POST['password'];

    if(!$email)
    {
        echo "Lütfen mail adresinizi giriniz.";
    }
    elseif(!$password)
    {
        echo "Lütfen şifrenizi giriniz";
    }
    else
    {
        $kullanici_sor = $conn->prepare('SELECT * FROM users WHERE user_email = ? && user_password = ?');
        $kullanici_sor->execute([
            $email,$password
        ]);

        echo $say = $kullanici_sor->rowCount();
        if($say==1)
        {
            $_SESSION['email']=$email;
            echo $_POST['email']; + "Başarıyla giriş yaptınız, yönlendiriliyorsunuz";
            header("Location:Hakkında_Sayfası.html");
            
        }
        else
        {
            echo "Bir hata oluştu,Tekrar kontrol ediniz.";
        }
    }

}

?>