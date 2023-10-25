<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
    <link rel="stylesheet" href="../styles/style.css">
</head>
<body>
    <section class="add-data">
        <div class="add-form-container">
            <h1>Edit Data</h1><hr><br>
            <form action="dashboard.php" method="post">
                <label for="squad">Squad</label>
                <input type="text" name="squad" class="textfield">
                <label for="jargon">Jargon</label>
                <input type="text" name=jargon" class="textfield">
                <label for="ketua">Ketua</label>
                <input type="text" name="ketua" class="textfield">
                <input type="submit" value="Edit Data" class="login-btn">
            </form>
        </div>
    </section>
</body>
</html>