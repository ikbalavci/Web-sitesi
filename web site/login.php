<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if($_POST["kullaniciAdi"]=='b201210070')
    {
        if($_POST["sifre"]=='b201210070')
        {
            header("Location: http://deneme1/web%20site/anasayfa.html#");
        }
        else
        {
           header("Refresh: 0.00005; url=http://deneme1/web%20site/login.html?adi=d%C4%B1oacn&soyadi=dcl%C5%9Famdlv#");
        }  
    }
    else{     
        header("Refresh: 0.00005; url=http://deneme1/web%20site/login.html?adi=d%C4%B1oacn&soyadi=dcl%C5%9Famdlv#");
    }
     ?>
     <script>
        window.alert("Hatalı giriş! Lütfen tekrar deneyin...");
     </script>
</body>
</html>