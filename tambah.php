<?php
include_once("koneksi.php");

if (isset($_POST['Submit'])) {
    $email = $_POST['email'];
    $name = $_POST['nama'];
    $institution = $_POST['institution'];
    $country = $_POST['country'];
    $address = $_POST['address'];

    $result = mysqli_query($con, "insert into registration (email, nama, institution, country, address) values ('$email', '$name', '$institution', '$country', '$address')");
    if (!$result) {
    echo "Error: " . mysqli_error($con);
    exit();
}

    echo "Data berhasil disimpan. <a href='halaman.php'>View Users</a>";
    exit();
}
?>
<html>

<head>
    <title>Tambah data mahasiswa</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
</head>

<body>
    <a href="halaman.php" type="button" class="btn btn-outline-primary" style="position: relative; top: 10px; margin-left: 20px;">Go to Home</a>
    <br /><br />
    <form action="tambah.php" method="post" name="form1">
        <table width="25%">
            <tr>
                <td>E-Mail</td>
                <td><input type="text" name="email"></td>
            </tr>
            <tr>
                <td>Name</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Institution</td>
                <td><input type="text" name="institution"></td>
            </tr>
            <tr>
                <td>Country</td>
                <td><input type="text" name="country"></td>
            </tr>
            <tr>
                <td>Address</td>
                <td><input type="text" name="address"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" class="btn btn-outline-success" name="Submit" value="Submit"></td>
            </tr>
        </table>
    </form>
</body>

</html>