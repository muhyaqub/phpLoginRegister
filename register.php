<?php
    include "service/database.php";

    if(isset($_POST["register"])){
        $username = $_POST["username"];
        $password = $_POST["password"];

        $sql = "INSERT INTO users (username, password) VALUES('$username', '$password')";

        if($db->query($sql)) {
            echo "<script>alert('berhasil membuat akun, silahkan login');  window.location.href='login.php';</script>";
        } else{
            echo "<script>alert('username atau password sudah ada');</script>";
        }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi</title>
</head>
<body>
    <?php include "layout/html/login-header.html"?>
    <?php include "layout/html/register.html" ?>
    <?php include "layout/html/footer.html" ?>
</body>
</html>