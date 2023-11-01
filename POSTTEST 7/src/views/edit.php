<?php
require "../act/connection.php";
$id = $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM GameHive where id=$id");
    $GameHive =[];
while($row=mysqli_fetch_array($result)){
    $travel[] = $row;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    <section class="add-data">
        <div class="add-form-container">
            <h1>Edit Data</h1><hr><br>
            <form action="dashboard.php" method="post">
                <label for="squad">Squad</label>
                <input type="text" name="squad" class="textfield" require>
                <label for="jargon">Jargon</label>
                <input type="text" name="jargon" class="textfield" require>
                <label for="ketua">Ketua</label>
                <input type="text" name="ketua" class="textfield" require>
                <input type="submit" value="Edit Data" class="login-btn">
            </form>
        </div>
    </section>
</body>
</html>