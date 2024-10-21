<?php
include_once("koneksi.php");

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $email = $_POST['email'];
    $name = $_POST['nama'];
    $institution = $_POST['institution'];
    $country = $_POST['country'];
    $address = $_POST['address'];

    $result = mysqli_query($con, "UPDATE registration SET id='$id', email='$email', nama='$name', institution='$institution', country='$country', address='$address'");

    header("Location: halaman.php");
}
?>
<?php

$id = $_GET['id'];

$result = mysqli_query($con, "SELECT * FROM registration WHERE id='$id'");
while ($user_data = mysqli_fetch_array($result)) {
    $email = $user_data['email'];
    $name = $user_data['nama'];
    $institution = $user_data['institution'];
    $country = $user_data['country'];
    $address = $user_data['address'];
}
?>
<html>

<head>
    <title>Edit Data Mahasiswa</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
</head>

<body>
    <a href="halaman.php" type="button" class="btn btn-outline-primary" style="position: relative; top: 10px; margin-left: 20px;">Home</a>
    <br /><br />
    <form name="update registration" method="post" action="edit.php">
        <table border="0">
            <tr>
                <td>Email</td>
                <td><input type="text" name="email" value=<?php echo $email; ?>></td>
            </tr>
            <tr>
                <td>Name</td>
                <td><input type="text" name="nama" value=<?php echo $name; ?>></td>
            </tr>
            <tr>
                <td>Institution</td>
                <td><input type="text" name="institution" value=<?php echo $institution; ?>></td>
            </tr>
            <tr>
                <td>Country</td>
                <td><input type="text" name="country" value=<?php echo $country; ?>></td>
            </tr>
            <tr>
                <td>Address</td>
                <td><input type="text" name="address" value=<?php echo $address; ?>></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $id ?>></td>
                <td><input type="submit" class="btn btn-outline-success" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>

</html>