       function kontrol(){
        if (document.form1.username.value == ""){
            alert ( "Kullanıcı Adını Giriniz" );
            return false;
        }
        if (document.form1.password.value == ""){
            alert ( "Sifrenizi Giriniz" );
            return false;
        }
        if(document.form1.email.value=="")
        {
            alert ( "Eposta Adresinizi Giriniz" );
            return false;
        }
        if(document.form1.cinsiyet.value=="")
        {
            alert ( "Cinsiyetinizi Seçiniz" );
            return false;
        }
        alert ( "Form Gönderildi Sayfaya Yönlendiriliyorsunuz" );
        return true;
    }
        