<?php
    $server = "localhost";
    $user = "root";
    $pass = "";
    $database = "togar";

    $conn = mysqli_connect($server, $user, $pass, $database);

    if (!$conn) {
        die("<script>alert('Gagal tersambung dengan database.')</script>");
    }

    function query($query){
        global $conn;
        $result = mysqli_query($conn, $query);
        $rows = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }
        return $rows;
    }

    function tambahOrderan($nama, $produk, $nohp, $email, $alamat, $harga){
        global $conn;
        $sql = "INSERT INTO orderan (nama, produk, nohp, email, alamat, harga)
                VALUES ('$nama', '$produk', '$nohp', '$email', '$alamat', '$harga')";
        $result = mysqli_query($conn, $sql);
        $url;
    $nomorhp= "+62 896-4630-6691";
        if ($result) {
            $text =  "*PESANAN* %0A%0A *Nama* = $nama %0A *Produk* = $produk %0A *Nomor Handphone Yang Bisa Dihubungi* = $nohp %0A *Email* = $email %0A *Alamat* = $alamat %0A *Harga* = $harga %0A ";
            $url = "https://api.whatsapp.com/send?phone=$nomorhp&text=$text"; 
            echo "<script>alert('Pesanan Telah Terinput')</script>";
            header("Location: $url");
        } else {
            echo "<script>alert('Woops! Terjadi kesalahan.')</script>";
        }
    }
  

?>