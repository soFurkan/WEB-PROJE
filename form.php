
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Veri Sonuçları</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="./css/İletişim_Sayfası.css">
</head>
<body>
<nav class="navbar navbar-inverse">
        <div class="container-fluid">
          <div class="navbar-header">
            <p class="navbar-brand" href="#">Hoşgeldiniz</p>
          </div>
          <ul class="nav navbar-nav">
            <li><a href="Hakkında_Sayfası.html">Hakkında Sayfası</a></li>
            <li><a href="Özgeçmiş_Sayfası.html">Öz Geçmiş Sayfası</a></li>
            <li><a href="Şehrim_Sayfası.html">Şehrim Sayfası</a></li>
            <li><a href="Hobi_Sayfası.html">İlgi Alanlarım Sayfası</a></li>
            <li><a href="İletişim_Sayfası.html">İletişim Sayfası</a></li>
          </ul>
        </div>
</nav>
<h3>FORM PHP DOSYASI</h3>
<hr>
        <ul>
          <li>
          <label for="username">Kullanıcı Adınız</label><br>
           <?php
            echo $_POST['username'];
            ?>
          </li>
          <hr>
          <li>
          <label for="username">Şifreniz</label><br>
           <?php
            echo $_POST['password'];
            ?>
          </li>
          <hr>
          <li>
          <label for="username">E Posta Adresiniz</label><br>
           <?php
            echo $_POST['email'];
            ?>
          </li>
          <hr>
          <li>
            <label for="">Cinsiyetiniz</label><br>
            <?php
            echo $_POST['cinsiyet'];
            ?>
          </li>
          <hr>
          <li>
          <label for="">Beğendiğiniz Sayfalar</label><br>
          <?php
          if(isset($_POST['sayfalar']))
          {
            if(!empty($_POST['sayfalar']))
            {
            foreach($_POST['sayfalar'] as $sayfa )
            {
              echo $sayfa." , ";
            }
            }
          }
          else
          {
            echo 'Sayfa seçmediniz.';
          }
          ?>
          </li>
          <hr>
          <li>
          <label for="manzaralar">Beğendiğiniz Manzara</label><br>
          <?php
            if(isset($_POST['manzaralar']))
            {
              if(!empty($_POST['manzaralar']))
              {
                echo $_POST['manzaralar'];
              }              
              else
              {
                echo 'Manzara seçmediniz.';
              }
              }
            ?>
          </li>
          <hr>
          <li>
          <label for="mesaj">Kendinizi Tanıttığınız Metin</label><br>
          <?php
            echo $_POST['mesaj'];
            ?>
          </li>
          <hr>
          <li>
          <label for="güncel">Güncellenmesini İstediğiniz Sayfa</label><br>
          <?php
            if(isset($_POST['güncel']))
            {
              if(!empty($_POST['güncel']))
              {
                echo $_POST['güncel'];
              }              
              else
              {
                echo 'Sayfa seçmediniz.';
              }
              }
            ?>
          </li>
          <hr>
          <li>
          <label for="">Dosya Durumu</label><br>
          <?php
            if(isset($_POST['dosya']))
            {
              if(!empty($_POST['dosya']))
              {
                echo 'Dosyanız Yüklendi';
              }              
              else
              {
                echo 'Dosya yüklemediniz.';
              }
              }
            ?>
          </li>
          </ul>











<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>

