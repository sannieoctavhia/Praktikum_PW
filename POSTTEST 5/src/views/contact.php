<?php
require '../act/connection.php';

if(isset($_POST['contact'])) {
    $squad = $_POST['squad'];
    $jargon = $_POST['jargon'];
    $ketua = $_POST['ketua'];

    $result = mysqli_query($conn, "INSERT INTO GameHive VALUES ('', '$squad', '$jargon', '$ketua')");

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
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
    <link rel="stylesheet" href="../styles/style.css">
</head>
<body>
    <section class="add-data">
        <div class="add-form-container">
            <h1>Tambah Data</h1><hr><br>
            <form action="" method="post">
                <label for="squad">squad</label>
                <input type="text" name="squad" class="textfield">
                <label for="jargon">jargon</label>
                <input type="text" name="jargon" class="textfield">
                <label for="ketua">ketua</label>
                <input type="text" name="ketua" class="textfield">
                <input type="submit" name="tambah" value="Tambah Data" class="login-btn">
            </form>
        </div>
    </section>
</body>
</html>

