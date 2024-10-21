<?php
include_once("koneksi.php");

if (isset($_GET['id'])) {

    $id = $_GET['id'];

    $result = mysqli_query($con, "DELETE FROM registration WHERE id='$id'");

    if ($result) {
        header("Location: halaman.php?status=deleted");
        exit();
    } else {
        header("Location: halaman.php?status=failed");
        exit();
    }
}
?>
