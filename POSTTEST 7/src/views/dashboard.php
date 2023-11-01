<?php
require "../act/connection.php";

$result = mysqli_query($conn, "SELECT * FROM GameHive");

$GameHive = [];

while ($row = mysqli_fetch_assoc($result)) {
    $GameHive[] = $row;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Staff</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>
    <div class="dashboard">
        <nav class="dash-side-bar">
            <img src="../assets/images/logo.svg" alt="">
            <ul>
                <li>Data Squad Pemain</li>
                <li>Data setiap SQUAD akan muncul disamping</li>
                <li>contact +62 12345</li>
                <li>more about we</li>
            </ul>
            <div class="settings">
                <img src="" alt="">
                <p>Pengaturan</p>
            </div>
        </nav>
        <main class="dash-container">
            <section class="dash-nav-bar">
                <div class="dash-nav-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24">
                        <path d="M784-120 532-372q-30 24-69 38t-83 14q-109 0-184.5-75.5T120-580q0-109 75.5-184.5T380-840q109 0 184.5 75.5T640-580q0 44-14 83t-38 69l252 252-56 56ZM380-400q75 0 127.5-52.5T560-580q0-75-52.5-127.5T380-760q-75 0-127.5 52.5T200-580q0 75 52.5 127.5T380-400Z" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24">
                        <path d="M160-200v-80h80v-280q0-83 50-147.5T420-792v-28q0-25 17.5-42.5T480-880q25 0 42.5 17.5T540-820v28q80 20 130 84.5T720-560v280h80v80H160Zm320-300Zm0 420q-33 0-56.5-23.5T400-160h160q0 33-23.5 56.5T480-80ZM320-280h320v-280q0-66-47-113t-113-47q-66 0-113 47t-47 113v280Z" />
                    </svg>
                </div>
                <div class="dash-account">
                    <img src="" alt="">

                    <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24">
                        <path d="M480-345 240-585l56-56 184 184 184-184 56 56-240 240Z" />
                    </svg>
                </div>
            </section>
            <section class="dash-main">
                <h1>Halo !</h1>
                <hr><br>
    </div><br>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Squad</th>
                <th>Jargon</th>
                <th>ketua</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1;
            foreach ($GameHive as $gms) : ?>
                <tr>
                    <td><?php echo $i ?></td>
                    <td><?php echo $gms["squad"] ?></td>
                    <td><?php echo $gms["jargon"] ?></td>
                    <td><?php echo $gms["ketua"] ?></td>
                    <td class="action">
                        <a href="edit.php?id=<?= $gms['id'] ?>"><button>Edit</button></a>
                        <a href="delete.php?id=<?= $gms['id'] ?>"><button>delete</button></a>
                </tr>
            <?php $i++;
            endforeach; ?>
        </tbody>
    </table>
    <li class="navbar-item">
        <a href="index.php" class="navbar-link" data-nav-link>Back to home</a>
    </li>
    </section>
    </main>
    </div>
</body>

</html>