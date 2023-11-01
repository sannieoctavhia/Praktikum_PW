<?php
require '../act/connection.php';

if (isset($_POST['tambah'])) {
    $nama = $_POST['squad'];
    $nim = $_POST['jargon'];
    $fakultas = $_POST['fakultas'];


    $result = mysqli_query($conn, "INSERT INTO GameHive VALUES ('','$nama', '$nim', '$fakultas')");

    if($result) {
        echo "
        <script>
        alert('Data berhasil ditambahkan');
        document.location.href = 'dashboard.php'
        </script> ";
    } else {
        echo "
        <script>
        alert('Data gagal ditambahkan');
        document.location.href = 'tambah.php'
        </script> ";
    }
}
//
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>
    <section class="dash-main">
            <h1>Tambah Data</h1>
            <hr><br>
            <form action="" method="post">
                <label for="squad">Squad</label>
                <input type="text" name="squad" class="textfield" require>
                <label for="jargon">Jargon</label>
                <input type="text" name="jargon" class="textfield" require>
                <label for="fakultas">ketua</label>
                <input type="text" name="fakultas" class="textfield" require>
                <input type="submit" name="tambah" value="Tambah Data" class="login-btn">
            </form>
        </div>
    </section>
</body>

</html>