<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Halaman Login</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    <?php
    session_start();

    include "koneksi2.php";

    if($_SERVER['REQUEST_METHOD']=='POST'){

        $username = $_POST['username'];
        $password = md5 ($_POST['password']);

        $queryUser = mysqli_query($con, "select * from login where username='$username' and password='$password'");

        if (mysqli_num_rows($queryUser)==1) {
            $user = mysqli_fetch_array($queryUser);

            $_SESSION['login_user'] = $_POST['username'];
            header('Location:dashboard.php');
        
        } else {
            echo 'Username atau Password Salah!';
        }
    }
    ?>

</body>
    <h1>Halaman Login</h1>
    <hr>
    <form action="" method="post">
        <table width="25%">
            <tr>
                <td>Username</td>
                <td><input type="text" name="username"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="password"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" class="btn btn-outline-success" name="Submit" value="Login"></td>
            </tr>
        </table>
    </form>
</html>