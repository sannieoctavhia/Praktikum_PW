<?php
require "../act/connection.php";
$id = $_GET['id'];
$result = mysqli_query($conn, "DELETE from GameHive WHERE id='$id'");
if ($result) {
    echo "<script>
        alert('data berhasil dihapus');
        document.location.href = 'dashboard.php'
    </script>";
} else {
    echo "<script>
        alert('data gagal dihapus');
        document.location.href = 'dashboard.php'
    </script>";
}
?>