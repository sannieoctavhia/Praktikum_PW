<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "pendaftaran";

$conn = mysqli_connect($host, $user, $pass, $db);

if(!$conn) {
    die("Gagal Terhubung" . mysqli_connect_error());
} else {
    echo"Berhasil Terhubung";
}

?>