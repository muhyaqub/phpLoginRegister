<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ramadhan Kareem</title>
</head>
<style>
body{
    font-family: Arial, Helvetica, sans-serif;
    background-color: rgb(136, 68, 199);
}
.landing-pages{
    display: flex;
    margin:200px 100px;
    justify-content: center;
    align-items: center;
    max-width: 100%;
    height: 500px;
    animation: slideBackground 10s infinite linear;
    background-size: cover;
    background-position:center;
    box-shadow: 15px 15px 115px rgb(17, 17, 17);
    border-radius: 15px;
}
@keyframes slideBackground {
    0%   { background-image: url('asset/images/images.jpeg'); }
    33%  { background-image: url('asset/images/images-2.jpeg'); }
    66%  { background-image: url('asset/images/images-3.jpeg'); }
    100% { background-image: url('asset/images/images.jpeg'); }
}
.outline-text {
font-size: 60px;
font-weight: bold;
color:#fff ;
text-shadow: 
    -1px -1px 0 rgb(136, 68, 199),  
     1px -1px 0 rgb(136, 68, 199),  
    -1px  1px 0 rgb(136, 68, 199),  
     1px  1px 0 rgb(136, 68, 199); 
}

.buttons {
    justify-content: center;
    align-items: center;
    display: flex;
    gap: 30px;
}
button{
    padding: 20px 30px;
     font-size: 16px;
     cursor: pointer;
     border: none;
     background-color:rgb(136, 68, 199);
     color: #fff;
     border: 2px solid rgb(196, 145, 243);
     border-radius: 10px;
    transition: 0.3s;
    position: relative;
    cursor: pointer;

}

button:hover {
    background-color: #dcaef1;
    border: 2px solid rgb(136, 68, 199);
    
}
@media (max-width: 1024px) {
    .outline-text {
        font-size: 50px;
    }
    .landing-pages{
        margin: 200px auto;
    }
}


@media (max-width: 768px) {
    .outline-text {
        font-size: 40px;
    }
    .landing-pages{
        margin: 150px auto;
    }
}
    


@media (max-width: 480px) {
    .outline-text {
        font-size: 30px;
    }
    .landing-pages{
        margin: 100pxpx auto;
    }
}

</style>
<body>
<div class="landing-pages">
    <div class="landing-page-isi">
    <h3 class="outline-text">SELAMAT DATANG</h3>
    <div class="buttons">
        <a href="login.php"><button>LOGIN</button></a>
        <a href="register.php"><button>REGISTRASI</button></a>
    </div>
    </div>
</div>
    <?php include "layout/html/footer.html" ?>
</body>
</html>