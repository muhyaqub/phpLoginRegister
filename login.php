<?php
    include "service/database.php";
    if(isset($_POST['login'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
    
    $sql = "SELECT * FROM users WHERE username='$username' AND 
    password='$password'";

    $result = $db->query($sql);

    if($result->num_rows > 0) {
        $data = $result->fetch_assoc();

        header("location: dashboard.php");

    }else {
        echo "<script>alert('username atau password salah!');</script>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ramadhan Kareem</title>
</head>
<body>
<?php include "layout/html/login-header.html"?>
<?php include "layout/html/login.html"?>
<?php include "layout/html/footer.html" ?>
</body>
</html>
