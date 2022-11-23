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
        if ($result) {
            echo "<script>alert('Pesanan Telah Terinput')</script>";
            //header("Location: index.php");
        } else {
            echo "<script>alert('Woops! Terjadi kesalahan.')</script>";
        }
    }
  

?>