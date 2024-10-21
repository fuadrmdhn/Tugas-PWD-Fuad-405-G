<?php
include_once("koneksi.php");

$result = mysqli_query($con, "SELECT * FROM registration");
?>
<html>

<head>
    <title>Halaman Utama</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>

<body>
    <a href="tambah.php" type="button" class="btn btn-outline-primary" style="position: relative; top: 10px; margin-left: 20px;">Add New Data</a><br /><br />
    <table class="table" width='80%' border=1>
        <tr>
            <th class="table-primary">E-Mail</th>
            <th class="table-secondary">Name</th>
            <th class="table-success">Institution</th>
            <th class="table-danger">Country</th>
            <th class="table-warning">Address</th>
            <th class="table-info">Update</th>
        </tr>
        <?php
        while ($user_data = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>" . $user_data['email'] . "</td>";
            echo "<td>" . $user_data['nama'] . "</td>";
            echo "<td>" . $user_data['institution'] . "</td>";
            echo "<td>" . $user_data['country'] . "</td>";
            echo "<td>" . $user_data['address'] . "</td>";
            echo "<td><a href='edit.php?id=$user_data[id]'>Edit</a> | <a href='delete.php?id=$user_data[id]'>Delete</a></td></tr>";
        }
        if (isset($_GET['status'])) {
            if ($_GET['status'] == 'deleted') {
                echo "<div class='alert alert-success'>Data berhasil dihapus.</div>";
            } elseif ($_GET['status'] == 'failed') {
                echo "<div class='alert alert-danger'>Gagal menghapus data.</div>";
            }
        }
        ?>
    </table>
</body>

</html>