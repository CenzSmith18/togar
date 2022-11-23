<?php

include 'config/function.php';
error_reporting(0);


$nama = $_POST["nama"];
$nohp = $_POST["nohp"];
$email = $_POST["email"];
$alamat = $_POST["alamat"];
$harga = $_POST["harga"];
$produk = $_POST["produk"];
$url;
$nomorhp= "+62 896-4630-6691";
if ( tambahOrderan($nama, $produk, $nohp, $email, $alamat, $harga) > 0 ){
    $text =  "*PESANAN* %0A%0A *Nama* = $nama %0A *Produk* = $produk %0A *Nomor Handphone Yang Bisa Dihubungi* = $nohp %0A *Email* = $email %0A *Alamat* = $alamat %0A *Harga* = $harga %0A ";
    $url = "https://api.whatsapp.com/send?phone=$nomorhp&text=$text"; 

    echo"<script type='text/javascript'>
        window.location.href = '<?=$url?>;
    </script>";
    
}
?>

<html>
    <head>
   
    </head>

    <body>
    </body>
</html>